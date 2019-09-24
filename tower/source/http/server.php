<?php
namespace Tower\Source\Http;


class Server
{


    protected static $response = array( 
        "code" => 200, 
        "reasonPhrase" => 'OK',
        "protocolVersion" => '1.1',
        "headers" => [], 
        "body" => null, 
    );

    protected $varibles = [
        "GET" => [],
        "POST" => [],
        "COOKIE" => [],
        "SESSION" => [],
        "SERVER" => [],
        "FILES" =>[],
    ];

    
    function __construct($varibles = []){
        $varibles = is_array( $varibles ) ? $varibles : $this->varibles;
        $this->varibles = array_merge( $this->varibles , $varibles );
    }




    public function request($call=null)
    {
        ob_start();
        try {
            $response = is_callable($call) ?  $call($this->varibles) : $this::$response;      
        } catch (\Throwable $e) {
            $response['code'] = 500;
            $response['body'] = $this->render(500, ['error'=>$e]);
        }
        $buffer = ob_get_contents();
        ob_end_clean();

        $response = $response ? $response : [
            "code" => 500,
            "body" => $this->render('null')
        ]; 
        $response['body'] = $response['body'] ? $response['body'] : $this->render($response['code']);
        $response = array_merge($this::$response, $response); 
        return $this->send($response);
    }




    private function send($response)
    {
        //-----------------------------------------------------------------//
        // send headers
        header(sprintf('HTTP/%s %s %s', $response["protocolVersion"], $response["code"], $response["reasonPhrase"]), true, $response["code"]);
        $response["headers"] = is_array($response["headers"]) ? $response["headers"] : $this::$response;

        foreach ($response["headers"] as $name => $values) {
            $replace = 0 === strcasecmp($name, 'Content-Type');
            $values = is_array($values) ? array_values($values) : array($values);
            foreach ($values as $value) {
                header($name.': '.$value, $replace, $response["code"]);
            }
        }
        //-----------------------------------------------------------------//
        // send body
        if (null !== $response["body"] && !is_string($response["body"]) && !is_numeric($response["body"])) return $this;
        echo (string)  $response["body"];
        return $this;
    }







    private function render($name, $params=[]){
        if (!$this->page($name)) return "template file '$name' not exist";
        if (!empty($params)) extract($params);
        ob_start();
        include $this->page($name);
        $buffer = ob_get_contents();
        ob_end_clean();
        return  $buffer;
    }
    private function page( $file ){
        $file = substr($file,strripos($file,'.')+1) === ".php" ? $file : $file.".php";
        $file = str_replace("/", DIRECTORY_SEPARATOR , $file);
        $file = str_replace("\\", DIRECTORY_SEPARATOR , $file);
        $path = realpath(dirname(__FILE__).DIRECTORY_SEPARATOR."page").DIRECTORY_SEPARATOR;
        if( file_exists($path.$file) ) return $path.$file;
        return false;
    }




}
