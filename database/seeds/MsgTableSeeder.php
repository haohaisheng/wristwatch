<?php


use Illuminate\Database\Seeder;
use App\Models\Msg;
class  MsgTableSeeder extends  Seeder{
	
	public function run(){
		
		DB::table('msgs')->insert([
		'title' =>'hello word',
		'author' =>'test1',
		'body' =>'����Ϊ�˲�������ʹ�õ�',
		]);
	}
}