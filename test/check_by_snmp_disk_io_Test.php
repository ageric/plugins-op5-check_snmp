<?php
require_once('test_helper.php');
class Check_Snmp_Disk_Io_Test extends test_helper
{
	public $plugin = 'check_by_snmp_disk_io';
	public function get_snmp_data() {
		$snmpdata = "1.3.6.1.4.1.2021.13.15.1.1.1.1|2|1
			1.3.6.1.4.1.2021.13.15.1.1.1.2|2|2
			1.3.6.1.4.1.2021.13.15.1.1.1.3|2|3
			1.3.6.1.4.1.2021.13.15.1.1.1.4|2|4
			1.3.6.1.4.1.2021.13.15.1.1.1.5|2|5
			1.3.6.1.4.1.2021.13.15.1.1.1.6|2|6
			1.3.6.1.4.1.2021.13.15.1.1.1.7|2|7
			1.3.6.1.4.1.2021.13.15.1.1.1.8|2|8
			1.3.6.1.4.1.2021.13.15.1.1.1.9|2|9
			1.3.6.1.4.1.2021.13.15.1.1.1.10|2|10
			1.3.6.1.4.1.2021.13.15.1.1.1.11|2|11
			1.3.6.1.4.1.2021.13.15.1.1.1.12|2|12
			1.3.6.1.4.1.2021.13.15.1.1.1.13|2|13
			1.3.6.1.4.1.2021.13.15.1.1.1.14|2|14
			1.3.6.1.4.1.2021.13.15.1.1.1.15|2|15
			1.3.6.1.4.1.2021.13.15.1.1.1.16|2|16
			1.3.6.1.4.1.2021.13.15.1.1.1.17|2|17
			1.3.6.1.4.1.2021.13.15.1.1.1.18|2|18
			1.3.6.1.4.1.2021.13.15.1.1.1.19|2|19
			1.3.6.1.4.1.2021.13.15.1.1.1.20|2|20
			1.3.6.1.4.1.2021.13.15.1.1.1.21|2|21
			1.3.6.1.4.1.2021.13.15.1.1.1.22|2|22
			1.3.6.1.4.1.2021.13.15.1.1.1.23|2|23
			1.3.6.1.4.1.2021.13.15.1.1.1.24|2|24
			1.3.6.1.4.1.2021.13.15.1.1.1.25|2|25
			1.3.6.1.4.1.2021.13.15.1.1.1.26|2|26
			1.3.6.1.4.1.2021.13.15.1.1.1.27|2|27
			1.3.6.1.4.1.2021.13.15.1.1.1.28|2|28
			1.3.6.1.4.1.2021.13.15.1.1.2.1|4|ram0
			1.3.6.1.4.1.2021.13.15.1.1.2.2|4|ram1
			1.3.6.1.4.1.2021.13.15.1.1.2.3|4|ram2
			1.3.6.1.4.1.2021.13.15.1.1.2.4|4|ram3
			1.3.6.1.4.1.2021.13.15.1.1.2.5|4|ram4
			1.3.6.1.4.1.2021.13.15.1.1.2.6|4|ram5
			1.3.6.1.4.1.2021.13.15.1.1.2.7|4|ram6
			1.3.6.1.4.1.2021.13.15.1.1.2.8|4|ram7
			1.3.6.1.4.1.2021.13.15.1.1.2.9|4|ram8
			1.3.6.1.4.1.2021.13.15.1.1.2.10|4|ram9
			1.3.6.1.4.1.2021.13.15.1.1.2.11|4|ram10
			1.3.6.1.4.1.2021.13.15.1.1.2.12|4|ram11
			1.3.6.1.4.1.2021.13.15.1.1.2.13|4|ram12
			1.3.6.1.4.1.2021.13.15.1.1.2.14|4|ram13
			1.3.6.1.4.1.2021.13.15.1.1.2.15|4|ram14
			1.3.6.1.4.1.2021.13.15.1.1.2.16|4|ram15
			1.3.6.1.4.1.2021.13.15.1.1.2.17|4|loop0
			1.3.6.1.4.1.2021.13.15.1.1.2.18|4|loop1
			1.3.6.1.4.1.2021.13.15.1.1.2.19|4|loop2
			1.3.6.1.4.1.2021.13.15.1.1.2.20|4|loop3
			1.3.6.1.4.1.2021.13.15.1.1.2.21|4|loop4
			1.3.6.1.4.1.2021.13.15.1.1.2.22|4|loop5
			1.3.6.1.4.1.2021.13.15.1.1.2.23|4|loop6
			1.3.6.1.4.1.2021.13.15.1.1.2.24|4|loop7
			1.3.6.1.4.1.2021.13.15.1.1.2.25|4|sda
			1.3.6.1.4.1.2021.13.15.1.1.2.26|4|sda1
			1.3.6.1.4.1.2021.13.15.1.1.2.27|4|sdb
			1.3.6.1.4.1.2021.13.15.1.1.2.28|4|sdb1
			1.3.6.1.4.1.2021.13.15.1.1.3.1|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.2|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.3|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.4|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.5|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.6|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.7|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.8|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.9|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.10|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.11|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.12|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.13|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.14|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.15|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.16|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.17|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.18|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.19|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.20|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.21|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.22|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.23|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.24|65|0
			1.3.6.1.4.1.2021.13.15.1.1.3.25|65|1330127872
			1.3.6.1.4.1.2021.13.15.1.1.3.26|65|1329509376
			1.3.6.1.4.1.2021.13.15.1.1.3.27|65|28614656
			1.3.6.1.4.1.2021.13.15.1.1.3.28|65|27975680
			1.3.6.1.4.1.2021.13.15.1.1.4.1|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.2|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.3|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.4|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.5|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.6|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.7|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.8|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.9|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.10|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.11|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.12|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.13|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.14|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.15|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.16|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.17|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.18|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.19|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.20|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.21|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.22|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.23|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.24|65|0
			1.3.6.1.4.1.2021.13.15.1.1.4.25|65|1815023616
			1.3.6.1.4.1.2021.13.15.1.1.4.26|65|1815023616
			1.3.6.1.4.1.2021.13.15.1.1.4.27|65|63111168
			1.3.6.1.4.1.2021.13.15.1.1.4.28|65|63111168
			1.3.6.1.4.1.2021.13.15.1.1.5.1|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.2|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.3|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.4|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.5|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.6|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.7|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.8|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.9|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.10|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.11|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.12|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.13|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.14|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.15|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.16|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.17|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.18|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.19|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.20|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.21|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.22|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.23|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.24|65|0
			1.3.6.1.4.1.2021.13.15.1.1.5.25|65|110664
			1.3.6.1.4.1.2021.13.15.1.1.5.26|65|110513
			1.3.6.1.4.1.2021.13.15.1.1.5.27|65|1675
			1.3.6.1.4.1.2021.13.15.1.1.5.28|65|1522
			1.3.6.1.4.1.2021.13.15.1.1.6.1|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.2|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.3|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.4|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.5|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.6|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.7|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.8|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.9|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.10|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.11|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.12|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.13|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.14|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.15|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.16|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.17|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.18|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.19|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.20|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.21|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.22|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.23|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.24|65|0
			1.3.6.1.4.1.2021.13.15.1.1.6.25|65|7750139
			1.3.6.1.4.1.2021.13.15.1.1.6.26|65|7600861
			1.3.6.1.4.1.2021.13.15.1.1.6.27|65|596
			1.3.6.1.4.1.2021.13.15.1.1.6.28|65|596
			1.3.6.1.4.1.2021.13.15.1.1.9.1|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.2|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.3|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.4|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.5|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.6|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.7|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.8|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.9|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.10|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.11|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.12|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.13|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.14|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.15|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.16|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.17|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.18|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.19|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.20|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.21|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.22|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.23|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.24|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.25|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.26|2|1
			1.3.6.1.4.1.2021.13.15.1.1.9.27|2|0
			1.3.6.1.4.1.2021.13.15.1.1.9.28|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.1|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.2|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.3|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.4|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.5|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.6|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.7|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.8|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.9|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.10|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.11|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.12|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.13|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.14|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.15|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.16|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.17|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.18|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.19|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.20|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.21|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.22|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.23|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.24|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.25|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.26|2|2
			1.3.6.1.4.1.2021.13.15.1.1.10.27|2|0
			1.3.6.1.4.1.2021.13.15.1.1.10.28|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.1|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.2|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.3|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.4|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.5|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.6|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.7|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.8|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.9|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.10|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.11|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.12|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.13|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.14|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.15|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.16|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.17|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.18|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.19|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.20|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.21|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.22|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.23|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.24|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.25|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.26|2|3
			1.3.6.1.4.1.2021.13.15.1.1.11.27|2|0
			1.3.6.1.4.1.2021.13.15.1.1.11.28|2|0
			1.3.6.1.4.1.2021.13.15.1.1.12.1|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.2|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.3|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.4|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.5|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.6|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.7|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.8|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.9|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.10|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.11|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.12|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.13|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.14|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.15|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.16|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.17|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.18|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.19|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.20|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.21|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.22|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.23|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.24|70|0
			1.3.6.1.4.1.2021.13.15.1.1.12.25|70|1330127872
			1.3.6.1.4.1.2021.13.15.1.1.12.26|70|1329509376
			1.3.6.1.4.1.2021.13.15.1.1.12.27|70|28614656
			1.3.6.1.4.1.2021.13.15.1.1.12.28|70|27975680
			1.3.6.1.4.1.2021.13.15.1.1.13.1|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.2|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.3|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.4|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.5|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.6|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.7|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.8|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.9|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.10|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.11|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.12|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.13|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.14|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.15|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.16|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.17|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.18|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.19|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.20|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.21|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.22|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.23|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.24|70|0
			1.3.6.1.4.1.2021.13.15.1.1.13.25|70|66239533056
			1.3.6.1.4.1.2021.13.15.1.1.13.26|70|66239533056
			1.3.6.1.4.1.2021.13.15.1.1.13.27|70|63111168
			1.3.6.1.4.1.2021.13.15.1.1.13.28|70|63111168";
		return $snmpdata;
	}

	/**
	 * Storage testing
	 *
	 * @dataProvider snmpArgsProvider
	 */
	public function test_list_storage_units($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-D --list -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-D --list -q 1 -Q 2", array(
		), array(
			'ram0',
			'ram1',
			'ram2',
			'ram3',
			'ram4',
			'ram5',
			'ram6',
			'ram7',
			'ram8',
			'ram9',
			'ram10',
			'ram11',
			'ram12',
			'ram13',
			'ram14',
			'ram15',
			'loop0',
			'loop1',
			'loop2',
			'loop3',
			'loop4',
			'loop5',
			'loop6',
			'loop7',
			'sda',
			'sda1',
			'sdb',
			'sdb1',
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_list_with_default_filter_storage_units($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "--list -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "--list -q 1 -Q 2", array(
		), array(
			'sda',
			'sda1',
			'sdb',
			'sdb1',
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_valid_include_name_option($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-i sda -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-i sda -q 1 -Q 2", array(
			"1.3.6.1.4.1.2021.13.15.1.1.3.25" => array(65,1330127872 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.4.25" => array(65,1815023616 + 30),
			"1.3.6.1.4.1.2021.13.15.1.1.5.25" => array(65,110664 + 50),
			"1.3.6.1.4.1.2021.13.15.1.1.6.25" => array(65,7750139 + 10)
		), array(
			"OK: 1/1 OK (sda: nread=10.00byte/s nwritten=30.00byte/s reads=50/s writes=10/s )",
			"|'sda_nread'=10B;0:;0: 'sda_nwritten'=30B;0:;0: 'sda_reads'=50;0:;0: 'sda_writes'=10;0:;0:",
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_valid_include_regex_option($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "--include-regex '^sdb1$' -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "--include-regex '^sdb1$' -q 1 -Q 2", array(
			"1.3.6.1.4.1.2021.13.15.1.1.3.27" => array(65,28614656 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.4.27" => array(65,63111168 + 30),
			"1.3.6.1.4.1.2021.13.15.1.1.5.27" => array(65,1675 + 50),
			"1.3.6.1.4.1.2021.13.15.1.1.6.27" => array(65,596 + 10)
		), array(
			"OK: 1/1 OK (sdb1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s )",
			"|'sdb1_nread'=0B;0:;0: 'sdb1_nwritten'=0B;0:;0: 'sdb1_reads'=0;0:;0: 'sdb1_writes'=0;0:;0:",
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_include_regex_option_tree_freeing($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-e '^sda.$' -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-e '^sda.$' -q 1 -Q 2", array(
			"1.3.6.1.4.1.2021.13.15.1.1.3.27" => array(65,28614656 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.4.27" => array(65,63111168 + 30),
			"1.3.6.1.4.1.2021.13.15.1.1.5.27" => array(65,1675 + 50),
			"1.3.6.1.4.1.2021.13.15.1.1.6.27" => array(65,596 + 10)
		), array(
			"OK: 1/1 OK (sda1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s )",
			"|'sda1_nread'=0B;0:;0: 'sda1_nwritten'=0B;0:;0: 'sda1_reads'=0;0:;0: 'sda1_writes'=0;0:;0:",
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_invalid_include_regex_option($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-e '^/(asd$' -q 1 -Q 2", array(
		), array(
			"Failed to compile regular expression: Unmatched ( or \\(",
		), 3);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_invalid_I_option($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-i invalid -q 1 -Q 2", array(
		), array(
			"No storage units match your filters."
		), 3);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_invalid_time_zero($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-q 1 -Q 1", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-q 1 -Q 1", array(
		), array(
			"Time error, wait at least 1 second between checks"
		), 3);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_invalid_time_negative($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-q 2 -Q 1", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-q 2 -Q 1", array(
		), array(
			"Time error, wait at least 1 second between checks"
		), 3);
	}

	/**
	 * Test output and performance data
	 *
	 * @dataProvider snmpArgsProvider
	 */
	public function test_incorrect_thresholds_for_load_average($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-T load -w 1,2,3,7 -c 4,5,6 -q 1 -Q 2", array(
		), array(
			"Too many threshold arguments"
		), 3);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_output_for_load_average($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-T load -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-T load -q 1 -Q 2", array(
			"1.3.6.1.4.1.2021.13.15.1.1.3.25" => array(65,1330127872 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.4.25" => array(65,1815023616 + 30),
			"1.3.6.1.4.1.2021.13.15.1.1.5.25" => array(65,110664 + 50),
			"1.3.6.1.4.1.2021.13.15.1.1.6.25" => array(65,7750139 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.3.27" => array(65,28614656 + 100),
			"1.3.6.1.4.1.2021.13.15.1.1.4.27" => array(65,63111168 + 300),
			"1.3.6.1.4.1.2021.13.15.1.1.5.27" => array(65,1675 + 500),
			"1.3.6.1.4.1.2021.13.15.1.1.6.27" => array(65,596 + 100)
		), array(
			"OK: 4/4 OK (sda: nread=10.00byte/s nwritten=30.00byte/s reads=50/s writes=10/s load1=0% load5=0% load15=0%, sda1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s load1=1% load5=2% load15=3%, sdb: nread=100.00byte/s nwritten=300.00byte/s reads=500/s writes=100/s load1=0% load5=0% load15=0%, sdb1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s load1=0% load5=0% load15=0%)",
			"|'sda_nread'=10B;0:;0: 'sda_nwritten'=30B;0:;0: 'sda_reads'=50;0:;0: 'sda_writes'=10;0:;0: 'sda_load1'=0%;0:;0: 'sda_load5'=0%;0:;0: 'sda_load15'=0%;0:;0: 'sda1_nread'=0B;0:;0: 'sda1_nwritten'=0B;0:;0: 'sda1_reads'=0;0:;0: 'sda1_writes'=0;0:;0: 'sda1_load1'=1%;0:;0: 'sda1_load5'=2%;0:;0: 'sda1_load15'=3%;0:;0: 'sdb_nread'=100B;0:;0: 'sdb_nwritten'=300B;0:;0: 'sdb_reads'=500;0:;0: 'sdb_writes'=100;0:;0: 'sdb_load1'=0%;0:;0: 'sdb_load5'=0%;0:;0: 'sdb_load15'=0%;0:;0: 'sdb1_nread'=0B;0:;0: 'sdb1_nwritten'=0B;0:;0: 'sdb1_reads'=0;0:;0: 'sdb1_writes'=0;0:;0: 'sdb1_load1'=0%;0:;0: 'sdb1_load5'=0%;0:;0: 'sdb1_load15'=0%;0:;0:",
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_output_for_load_average_with_thresholds($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-w 1,2,3 -c 4,5,6 -T load -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-w 1,2,3 -c 4,5,6 -T load -q 1 -Q 2", array(
		), array(
			"OK: 4/4 OK (sda: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s load1=0% load5=0% load15=0%, sda1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s load1=1% load5=2% load15=3%, sdb: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s load1=0% load5=0% load15=0%, sdb1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s load1=0% load5=0% load15=0%)",
			"|'sda_nread'=0B;0:1;0:4 'sda_nwritten'=0B;0:1;0:4 'sda_reads'=0;0:1;0:4 'sda_writes'=0;0:1;0:4 'sda_load1'=0%;0:1;0:4 'sda_load5'=0%;0:2;0:5 'sda_load15'=0%;0:3;0:6 'sda1_nread'=0B;0:1;0:4 'sda1_nwritten'=0B;0:1;0:4 'sda1_reads'=0;0:1;0:4 'sda1_writes'=0;0:1;0:4 'sda1_load1'=1%;0:1;0:4 'sda1_load5'=2%;0:2;0:5 'sda1_load15'=3%;0:3;0:6 'sdb_nread'=0B;0:1;0:4 'sdb_nwritten'=0B;0:1;0:4 'sdb_reads'=0;0:1;0:4 'sdb_writes'=0;0:1;0:4 'sdb_load1'=0%;0:1;0:4 'sdb_load5'=0%;0:2;0:5 'sdb_load15'=0%;0:3;0:6 'sdb1_nread'=0B;0:1;0:4 'sdb1_nwritten'=0B;0:1;0:4 'sdb1_reads'=0;0:1;0:4 'sdb1_writes'=0;0:1;0:4 'sdb1_load1'=0%;0:1;0:4 'sdb1_load5'=0%;0:2;0:5 'sdb1_load15'=0%;0:3;0:6",
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_output_for_load_average_warning($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-w 1,1,1 -c 4,5,6 -T load -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-w 1,1,1 -c 4,5,6 -T load -q 1 -Q 2", array(
		), array(
			"WARNING: 1/4 warning (sda1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s load1=1% load5=2% load15=3%)",
			"|'sda_nread'=0B;0:1;0:4 'sda_nwritten'=0B;0:1;0:4 'sda_reads'=0;0:1;0:4 'sda_writes'=0;0:1;0:4 'sda_load1'=0%;0:1;0:4 'sda_load5'=0%;0:1;0:5 'sda_load15'=0%;0:1;0:6 'sda1_nread'=0B;0:1;0:4 'sda1_nwritten'=0B;0:1;0:4 'sda1_reads'=0;0:1;0:4 'sda1_writes'=0;0:1;0:4 'sda1_load1'=1%;0:1;0:4 'sda1_load5'=2%;0:1;0:5 'sda1_load15'=3%;0:1;0:6 'sdb_nread'=0B;0:1;0:4 'sdb_nwritten'=0B;0:1;0:4 'sdb_reads'=0;0:1;0:4 'sdb_writes'=0;0:1;0:4 'sdb_load1'=0%;0:1;0:4 'sdb_load5'=0%;0:1;0:5 'sdb_load15'=0%;0:1;0:6 'sdb1_nread'=0B;0:1;0:4 'sdb1_nwritten'=0B;0:1;0:4 'sdb1_reads'=0;0:1;0:4 'sdb1_writes'=0;0:1;0:4 'sdb1_load1'=0%;0:1;0:4 'sdb1_load5'=0%;0:1;0:5 'sdb1_load15'=0%;0:1;0:6",
		), 1);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_output_for_load_average_critical($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-w 1,1,1 -c 2,2,2 -T load -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-w 1,1,1 -c 2,2,2 -T load -q 1 -Q 2", array(
		), array(
			"CRITICAL: 1/4 critical (sda1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s load1=1% load5=2% load15=3%)",
			"|'sda_nread'=0B;0:1;0:2 'sda_nwritten'=0B;0:1;0:2 'sda_reads'=0;0:1;0:2 'sda_writes'=0;0:1;0:2 'sda_load1'=0%;0:1;0:2 'sda_load5'=0%;0:1;0:2 'sda_load15'=0%;0:1;0:2 'sda1_nread'=0B;0:1;0:2 'sda1_nwritten'=0B;0:1;0:2 'sda1_reads'=0;0:1;0:2 'sda1_writes'=0;0:1;0:2 'sda1_load1'=1%;0:1;0:2 'sda1_load5'=2%;0:1;0:2 'sda1_load15'=3%;0:1;0:2 'sdb_nread'=0B;0:1;0:2 'sdb_nwritten'=0B;0:1;0:2 'sdb_reads'=0;0:1;0:2 'sdb_writes'=0;0:1;0:2 'sdb_load1'=0%;0:1;0:2 'sdb_load5'=0%;0:1;0:2 'sdb_load15'=0%;0:1;0:2 'sdb1_nread'=0B;0:1;0:2 'sdb1_nwritten'=0B;0:1;0:2 'sdb1_reads'=0;0:1;0:2 'sdb1_writes'=0;0:1;0:2 'sdb1_load1'=0%;0:1;0:2 'sdb1_load5'=0%;0:1;0:2 'sdb1_load15'=0%;0:1;0:2",
		), 2);
	}
	/**
	 * Counters
	 *
	 * @dataProvider snmpArgsProvider
	 */
	public function test_output_for_counter_with_thresholds_and_uom($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-m kib -w 1 -c 2 -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-m kib -w 1 -c 2 -q 1 -Q 2", array(
			"1.3.6.1.4.1.2021.13.15.1.1.3.25" => array(65,1330127872 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.4.25" => array(65,1815023616 + 30),
			"1.3.6.1.4.1.2021.13.15.1.1.5.25" => array(65,110664 + 50),
			"1.3.6.1.4.1.2021.13.15.1.1.6.25" => array(65,7750139 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.3.27" => array(65,28614656 + 100),
			"1.3.6.1.4.1.2021.13.15.1.1.4.27" => array(65,63111168 + 300),
			"1.3.6.1.4.1.2021.13.15.1.1.5.27" => array(65,1675 + 500),
			"1.3.6.1.4.1.2021.13.15.1.1.6.27" => array(65,596 + 100)
		), array(
			"OK: 4/4 OK (sda: nread=10.00byte/s nwritten=30.00byte/s reads=50/s writes=10/s sda1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s sdb: nread=100.00byte/s nwritten=300.00byte/s reads=500/s writes=100/s sdb1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s )",
			"|'sda_nread'=10B;0:1024;0:2048 'sda_nwritten'=30B;0:1024;0:2048 'sda_reads'=50;0:1024;0:2048 'sda_writes'=10;0:1024;0:2048 'sda1_nread'=0B;0:1024;0:2048 'sda1_nwritten'=0B;0:1024;0:2048 'sda1_reads'=0;0:1024;0:2048 'sda1_writes'=0;0:1024;0:2048 'sdb_nread'=100B;0:1024;0:2048 'sdb_nwritten'=300B;0:1024;0:2048 'sdb_reads'=500;0:1024;0:2048 'sdb_writes'=100;0:1024;0:2048 'sdb1_nread'=0B;0:1024;0:2048 'sdb1_nwritten'=0B;0:1024;0:2048 'sdb1_reads'=0;0:1024;0:2048 'sdb1_writes'=0;0:1024;0:2048",
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_output_for_counter_with_incorrect_thresholds($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-m kib -w 1,2 -c 2 -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-m kib -w 1,2 -c 2 -q 1 -Q 2", array(
			"1.3.6.1.4.1.2021.13.15.1.1.3.25" => array(65,1330127872 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.4.25" => array(65,1815023616 + 30),
			"1.3.6.1.4.1.2021.13.15.1.1.5.25" => array(65,110664 + 50),
			"1.3.6.1.4.1.2021.13.15.1.1.6.25" => array(65,7750139 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.3.27" => array(65,28614656 + 100),
			"1.3.6.1.4.1.2021.13.15.1.1.4.27" => array(65,63111168 + 300),
			"1.3.6.1.4.1.2021.13.15.1.1.5.27" => array(65,1675 + 500),
			"1.3.6.1.4.1.2021.13.15.1.1.6.27" => array(65,596 + 100)
		), array(
			"OK: 4/4 OK (sda: nread=10.00byte/s nwritten=30.00byte/s reads=50/s writes=10/s sda1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s sdb: nread=100.00byte/s nwritten=300.00byte/s reads=500/s writes=100/s sdb1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s )",
			"|'sda_nread'=10B;0:1024;0:2048 'sda_nwritten'=30B;0:1024;0:2048 'sda_reads'=50;0:1024;0:2048 'sda_writes'=10;0:1024;0:2048 'sda1_nread'=0B;0:1024;0:2048 'sda1_nwritten'=0B;0:1024;0:2048 'sda1_reads'=0;0:1024;0:2048 'sda1_writes'=0;0:1024;0:2048 'sdb_nread'=100B;0:1024;0:2048 'sdb_nwritten'=300B;0:1024;0:2048 'sdb_reads'=500;0:1024;0:2048 'sdb_writes'=100;0:1024;0:2048 'sdb1_nread'=0B;0:1024;0:2048 'sdb1_nwritten'=0B;0:1024;0:2048 'sdb1_reads'=0;0:1024;0:2048 'sdb1_writes'=0;0:1024;0:2048",
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_output_for_counter_warning($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-w 5 -c 200 -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-w 5 -c 200 -q 1 -Q 2", array(
			"1.3.6.1.4.1.2021.13.15.1.1.3.25" => array(65,1330127872 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.4.25" => array(65,1815023616 + 30),
			"1.3.6.1.4.1.2021.13.15.1.1.5.25" => array(65,110664 + 50),
			"1.3.6.1.4.1.2021.13.15.1.1.6.25" => array(65,7750139 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.3.27" => array(65,28614656 + 100),
			"1.3.6.1.4.1.2021.13.15.1.1.4.27" => array(65,63111168 + 300),
			"1.3.6.1.4.1.2021.13.15.1.1.5.27" => array(65,1675 + 500),
			"1.3.6.1.4.1.2021.13.15.1.1.6.27" => array(65,596 + 100)
		), array(
			"WARNING: 2/4 warning (sda: nread=10.00byte/s nwritten=30.00byte/s reads=50/s writes=10/s sdb: nread=100.00byte/s nwritten=300.00byte/s reads=500/s writes=100/s )",
			"|'sda_nread'=10B;0:5;0:200 'sda_nwritten'=30B;0:5;0:200 'sda_reads'=50;0:5;0:200 'sda_writes'=10;0:5;0:200 'sda1_nread'=0B;0:5;0:200 'sda1_nwritten'=0B;0:5;0:200 'sda1_reads'=0;0:5;0:200 'sda1_writes'=0;0:5;0:200 'sdb_nread'=100B;0:5;0:200 'sdb_nwritten'=300B;0:5;0:200 'sdb_reads'=500;0:5;0:200 'sdb_writes'=100;0:5;0:200 'sdb1_nread'=0B;0:5;0:200 'sdb1_nwritten'=0B;0:5;0:200 'sdb1_reads'=0;0:5;0:200 'sdb1_writes'=0;0:5;0:200",
		), 1);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_output_for_counter_critical($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-T nwritten -w 5 -c 20 -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-T nwritten -w 5 -c 20 -q 1 -Q 2", array(
			"1.3.6.1.4.1.2021.13.15.1.1.3.25" => array(65,1330127872 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.4.25" => array(65,1815023616 + 30),
			"1.3.6.1.4.1.2021.13.15.1.1.5.25" => array(65,110664 + 50),
			"1.3.6.1.4.1.2021.13.15.1.1.6.25" => array(65,7750139 + 10),
			"1.3.6.1.4.1.2021.13.15.1.1.3.27" => array(65,28614656 + 100),
			"1.3.6.1.4.1.2021.13.15.1.1.4.27" => array(65,63111168 + 300),
			"1.3.6.1.4.1.2021.13.15.1.1.5.27" => array(65,1675 + 500),
			"1.3.6.1.4.1.2021.13.15.1.1.6.27" => array(65,596 + 100)
		), array(
			"CRITICAL: 2/4 critical (sda: nread=10.00byte/s nwritten=30.00byte/s reads=50/s writes=10/s sdb: nread=100.00byte/s nwritten=300.00byte/s reads=500/s writes=100/s )",
			"|'sda_nread'=10B;0:5;0:20 'sda_nwritten'=30B;0:5;0:20 'sda_reads'=50;0:5;0:20 'sda_writes'=10;0:5;0:20 'sda1_nread'=0B;0:5;0:20 'sda1_nwritten'=0B;0:5;0:20 'sda1_reads'=0;0:5;0:20 'sda1_writes'=0;0:5;0:20 'sdb_nread'=100B;0:5;0:20 'sdb_nwritten'=300B;0:5;0:20 'sdb_reads'=500;0:5;0:20 'sdb_writes'=100;0:5;0:20 'sdb1_nread'=0B;0:5;0:20 'sdb1_nwritten'=0B;0:5;0:20 'sdb1_reads'=0;0:5;0:20 'sdb1_writes'=0;0:5;0:20",
		), 2);
	}

	/**
	 * @group MON-9656
	 * @dataProvider snmpArgsProvider
	 */
	public function test_do_not_depend_on_load_average_data($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-T nread -m gib -w5 -c6 -e 'sda?b?\d+?' -q 1 -Q 2", array(
			"/1.3.6.1.4.1.2021.13.15.1.1.(9|10|11).\d+/" => false
		),
		array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-T nread -m gib -w5 -c6 -e 'sda?b?\d+?' -q 1 -Q 2", array(
			"/1.3.6.1.4.1.2021.13.15.1.1.(9|10|11).\d+/" => false
		),array(
			"OK: 4/4 OK (sda: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s sda1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s sdb: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s sdb1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s )",
			"|'sda_nread'=0B;0:5368709120;0:6442450944 'sda_nwritten'=0B;0:5368709120;0:6442450944 'sda_reads'=0;0:5368709120;0:6442450944 'sda_writes'=0;0:5368709120;0:6442450944 'sda1_nread'=0B;0:5368709120;0:6442450944 'sda1_nwritten'=0B;0:5368709120;0:6442450944 'sda1_reads'=0;0:5368709120;0:6442450944 'sda1_writes'=0;0:5368709120;0:6442450944 'sdb_nread'=0B;0:5368709120;0:6442450944 'sdb_nwritten'=0B;0:5368709120;0:6442450944 'sdb_reads'=0;0:5368709120;0:6442450944 'sdb_writes'=0;0:5368709120;0:6442450944 'sdb1_nread'=0B;0:5368709120;0:6442450944 'sdb1_nwritten'=0B;0:5368709120;0:6442450944 'sdb1_reads'=0;0:5368709120;0:6442450944 'sdb1_writes'=0;0:5368709120;0:6442450944",
		), 0);
	}

	/**
	 * @group MON-9656
	 * @dataProvider snmpArgsProvider
	 */
	public function test_not_finding_entries_that_were_found_the_previous_time_for_counters($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-T nread -m gib -w5 -c6 -e 'sda?b?\d+?' -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);

		$this->assertCommand($conn_args, "-T nread -m gib -w5 -c6 -e 'sda?b?\d+?' -q 1 -Q 2", array(
			"1.3.6.1.4.1.2021.13.15.1.1.6.25" => false
		), array(
			"Failed to read counter data for storage unit 25 (sda). Please check your SNMP configuration",
		), 3);
	}
	/**
	 * @group MON-9656
	 * @dataProvider snmpArgsProvider
	 */
	public function test_do_not_depend_on_unused_counter_data($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-T load -m gib -w5 -c6 -e 'sda?b?\d+?' -q 1 -Q 2", array(
			"/1.3.6.1.4.1.2021.13.15.1.1.(3|4|5|6).\d+/" => false
		),
		array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);
		$this->assertCommand($conn_args, "-T load -m gib -w5 -c6 -e 'sda?b?\d+?' -q 1 -Q 2", array(
			"/1.3.6.1.4.1.2021.13.15.1.1.(3|4|5|6).\d+/" => false
		),array(
			"OK: 4/4 OK (sda: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s load1=0% load5=0% load15=0%, sda1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s load1=1% load5=2% load15=3%, sdb: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s load1=0% load5=0% load15=0%, sdb1: nread=0.00byte/s nwritten=0.00byte/s reads=0/s writes=0/s load1=0% load5=0% load15=0%)",
			"|'sda_nread'=0B;0:5368709120;0:6442450944 'sda_nwritten'=0B;0:5368709120;0:6442450944 'sda_reads'=0;0:5368709120;0:6442450944 'sda_writes'=0;0:5368709120;0:6442450944 'sda_load1'=0%;0:5;0:6 'sda_load5'=0%;0:;0: 'sda_load15'=0%;0:;0: 'sda1_nread'=0B;0:5368709120;0:6442450944 'sda1_nwritten'=0B;0:5368709120;0:6442450944 'sda1_reads'=0;0:5368709120;0:6442450944 'sda1_writes'=0;0:5368709120;0:6442450944 'sda1_load1'=1%;0:5;0:6 'sda1_load5'=2%;0:;0: 'sda1_load15'=3%;0:;0: 'sdb_nread'=0B;0:5368709120;0:6442450944 'sdb_nwritten'=0B;0:5368709120;0:6442450944 'sdb_reads'=0;0:5368709120;0:6442450944 'sdb_writes'=0;0:5368709120;0:6442450944 'sdb_load1'=0%;0:5;0:6 'sdb_load5'=0%;0:;0: 'sdb_load15'=0%;0:;0: 'sdb1_nread'=0B;0:5368709120;0:6442450944 'sdb1_nwritten'=0B;0:5368709120;0:6442450944 'sdb1_reads'=0;0:5368709120;0:6442450944 'sdb1_writes'=0;0:5368709120;0:6442450944 'sdb1_load1'=0%;0:5;0:6 'sdb1_load5'=0%;0:;0: 'sdb1_load15'=0%;0:;0:",
		), 0);
	}

	/**
	 * @group MON-9656
	 * @dataProvider snmpArgsProvider
	 */
	public function test_not_finding_entries_that_were_found_the_previous_time_for_load_average($conn_args) {
		// First run, no inital database
		$this->assertCommand($conn_args, "-T load -m gib -w5 -c6 -e 'sda?b?\d+?' -q 1 -Q 2", array(
		), array(
			"UNKNOWN: No previous state, initializing database. Re-run the plugin"
		), 3);

		$this->assertCommand($conn_args, "-T load -m gib -w5 -c6 -e 'sda?b?\d+?' -q 1 -Q 2", array(
			"1.3.6.1.4.1.2021.13.15.1.1.9.25" => false
		), array(
			"Failed to read load average data for storage unit 25 (sda). Please check your SNMP configuration",
		), 3);
	}
}
