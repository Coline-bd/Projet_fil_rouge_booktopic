<?php 

namespace View;

use View\Components\Header;
use View\Components\Footer;

class View{
    private Header $header;
    private Footer $footer;
    private ?string $buffer;

    public function __construct(string $title,array $script=[]){
    $this->header=new Header($title);
    $this->footer=new Footer($script);
    }

    protected function setBuffer(string $newBuffer){
        $this->buffer=$newBuffer;
    }

    public function display():void{
        echo $this->buffer;
    }

    public function displayAll(){
        $this->header->launchBuffer()->display();
        $this->launchBuffer()->display();
        $this->footer->launchBuffer()->display();
    }
}