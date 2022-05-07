<?php
interface IModel{
    public function insert();
    public function update();
    public function selectAll();
    public function delete( int $id);
    public function selectById(int $id);


}