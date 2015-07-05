<?php
	class Molly{
		public static function token(){
			return base64_encode(md5(__SALT__));
		}

		public static function submit(){

		}
	}