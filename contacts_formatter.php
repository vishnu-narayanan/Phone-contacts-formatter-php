<?php

		$input_file_name = 'combinedfile.vcf';
		$output_file_name = 'final.vcf';
		
		$input = file_get_contents($input_file_name);


		function add_0($matches)
		    {
		      $matches[0][0] = ':';
		      $temp = explode(':', $matches[0]);
		      return ',0'.$temp[1]; 
		   }

		function replace_91_to_0($matches)
		    {
		      $matches[0][0] = ':';
		      $temp = explode(':91', $matches[0]);
		      return ',0'.$temp[1]; 
		   }   

		function replace_plus91_to_0($matches)
		    {
		      $matches[0][0] = ':';
		      $temp = explode(':+91', $matches[0]);
		      return ',0'.$temp[1]; 
		   }      

		$pattern = "/,[6-9][0-9]{9},/";
		$output = preg_replace_callback( $pattern, "add_0" ,  $input);

		$pattern = "/,91[6-9][0-9]{9},/";
		$output = preg_replace_callback( $pattern, "replace_91_to_0" ,  $output);

		$pattern = "/,\+91[6-9][0-9]{9},/";
		$output = preg_replace_callback( $pattern, "replace_plus91_to_0" ,  $output);

		file_put_contents($output_file_name, $output);

?>