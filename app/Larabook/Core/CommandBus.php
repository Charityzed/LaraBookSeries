<?php
/**
 * Created by PhpStorm.
 * User: CharityZablon
 * Date: 10/7/15
 * Time: 12:36 PM
 */

namespace Larabook\Core;
use App;

trait CommandBus
{
public function execute($command){
  return  $this->getCommandBus()->execute($command);
}
    public function getCommandBus(){
        return App::make('Laracasts\Commander\CommandBus');
    }
}