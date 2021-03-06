<?php
/*
 *********************************************************************************************************
 * daloRADIUS - RADIUS Web Platform
 * Copyright (C) 2007 - Liran Tal <liran@enginx.com> All Rights Reserved.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 *********************************************************************************************************
 * Description:
 *		Main language file control
 *
 * Authors:	Liran Tal <liran@enginx.com>
 *
 *********************************************************************************************************
 */
 
	include_once(dirname(__FILE__).'/../library/config_read.php');
	
	switch($configValues['CONFIG_LANG']) {
	
		case "en":
			include (dirname(__FILE__)."/en.php");
			break;
		case "ru":
			include (dirname(__FILE__)."/ru.php");
			break;
		case "hu":
			include (dirname(__FILE__)."/hu.php");
			break;
		case "it":
			include (dirname(__FILE__)."/it.php");
			break;
		case "es_VE":
			include (dirname(__FILE__)."/es_VE.php");
			break;
		/*
		 * file is currently broken and needs a fix...
		case "ro":
			include (dirname(__FILE__)."/ro.php");
			break;
		*/
		case "pt_br":
			include (dirname(__FILE__)."/pt_br.php");
			break;
		default:
			include (dirname(__FILE__)."/en.php");
			break;
	}

?>
