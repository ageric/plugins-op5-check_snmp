<?php
require_once('test_helper.php');
class itgarden_disk_Test extends test_helper
{
	public $plugin = 'check_by_snmp_disk';
	public function get_snmp_data() {
		$snmpdata = "1.3.6.1.2.1.25.2.3.1.1.1|2|1
		1.3.6.1.2.1.25.2.3.1.1.2|2|2
		1.3.6.1.2.1.25.2.3.1.1.3|2|3
		1.3.6.1.2.1.25.2.3.1.1.4|2|4
		1.3.6.1.2.1.25.2.3.1.1.5|2|5
		1.3.6.1.2.1.25.2.3.1.1.6|2|6
		1.3.6.1.2.1.25.2.3.1.1.7|2|7
		1.3.6.1.2.1.25.2.3.1.1.8|2|8
		1.3.6.1.2.1.25.2.3.1.1.9|2|9
		1.3.6.1.2.1.25.2.3.1.1.10|2|10
		1.3.6.1.2.1.25.2.3.1.1.11|2|11
		1.3.6.1.2.1.25.2.3.1.1.12|2|12
		1.3.6.1.2.1.25.2.3.1.1.13|2|13
		1.3.6.1.2.1.25.2.3.1.1.14|2|14
		1.3.6.1.2.1.25.2.3.1.1.15|2|15
		1.3.6.1.2.1.25.2.3.1.1.16|2|16
		1.3.6.1.2.1.25.2.3.1.1.17|2|17
		1.3.6.1.2.1.25.2.3.1.1.18|2|18
		1.3.6.1.2.1.25.2.3.1.1.19|2|19
		1.3.6.1.2.1.25.2.3.1.1.20|2|20
		1.3.6.1.2.1.25.2.3.1.2.1|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.2|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.3|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.4|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.5|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.6|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.7|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.8|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.9|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.10|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.11|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.12|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.13|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.14|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.15|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.16|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.17|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.18|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.19|6|.1.3.6.1.2.1.25.2.1.4
		1.3.6.1.2.1.25.2.3.1.2.20|6|.1.3.6.1.2.1.25.2.1.2
		1.3.6.1.2.1.25.2.3.1.3.1|4|/dev
		1.3.6.1.2.1.25.2.3.1.3.2|4|/dev/shm
		1.3.6.1.2.1.25.2.3.1.3.3|4|/run
		1.3.6.1.2.1.25.2.3.1.3.4|4|/sys/fs/cgroup
		1.3.6.1.2.1.25.2.3.1.3.5|4|/
		1.3.6.1.2.1.25.2.3.1.3.6|4|/tmp
		1.3.6.1.2.1.25.2.3.1.3.7|4|/storage/updatemgr
		1.3.6.1.2.1.25.2.3.1.3.8|4|/storage/log
		1.3.6.1.2.1.25.2.3.1.3.9|4|/boot
		1.3.6.1.2.1.25.2.3.1.3.10|4|/storage/autodeploy
		1.3.6.1.2.1.25.2.3.1.3.11|4|/storage/db
		1.3.6.1.2.1.25.2.3.1.3.12|4|/storage/imagebuilder
		1.3.6.1.2.1.25.2.3.1.3.13|4|/storage/seat
		1.3.6.1.2.1.25.2.3.1.3.14|4|/storage/archive
		1.3.6.1.2.1.25.2.3.1.3.15|4|/storage/dblog
		1.3.6.1.2.1.25.2.3.1.3.16|4|/storage/core
		1.3.6.1.2.1.25.2.3.1.3.17|4|/storage/netdump
		1.3.6.1.2.1.25.2.3.1.3.18|4|/etc/vmware-content-library/nfsmounts/library-nfs-mount-24ce4993-1c7a-468d-a0d1-9146b59f015c
		1.3.6.1.2.1.25.2.3.1.3.19|4|/var/spool/snmp
		1.3.6.1.2.1.25.2.3.1.3.20|4|Real Memory
		1.3.6.1.2.1.25.2.3.1.4.1|2|4096
		1.3.6.1.2.1.25.2.3.1.4.2|2|4096
		1.3.6.1.2.1.25.2.3.1.4.3|2|4096
		1.3.6.1.2.1.25.2.3.1.4.4|2|4096
		1.3.6.1.2.1.25.2.3.1.4.5|2|4096
		1.3.6.1.2.1.25.2.3.1.4.6|2|4096
		1.3.6.1.2.1.25.2.3.1.4.7|2|4096
		1.3.6.1.2.1.25.2.3.1.4.8|2|4096
		1.3.6.1.2.1.25.2.3.1.4.9|2|1024
		1.3.6.1.2.1.25.2.3.1.4.10|2|4096
		1.3.6.1.2.1.25.2.3.1.4.11|2|4096
		1.3.6.1.2.1.25.2.3.1.4.12|2|4096
		1.3.6.1.2.1.25.2.3.1.4.13|2|4096
		1.3.6.1.2.1.25.2.3.1.4.14|2|4096
		1.3.6.1.2.1.25.2.3.1.4.15|2|4096
		1.3.6.1.2.1.25.2.3.1.4.16|2|4096
		1.3.6.1.2.1.25.2.3.1.4.17|2|4096
		1.3.6.1.2.1.25.2.3.1.4.18|2|262144
		1.3.6.1.2.1.25.2.3.1.4.19|2|4096
		1.3.6.1.2.1.25.2.3.1.4.20|2|1024
		1.3.6.1.2.1.25.2.3.1.5.1|2|3082576
		1.3.6.1.2.1.25.2.3.1.5.2|2|3085132
		1.3.6.1.2.1.25.2.3.1.5.3|2|3085132
		1.3.6.1.2.1.25.2.3.1.5.4|2|3085132
		1.3.6.1.2.1.25.2.3.1.5.5|2|2772286
		1.3.6.1.2.1.25.2.3.1.5.6|2|3085132
		1.3.6.1.2.1.25.2.3.1.5.7|2|25768264
		1.3.6.1.2.1.25.2.3.1.5.8|2|10286416
		1.3.6.1.2.1.25.2.3.1.5.9|2|122835
		1.3.6.1.2.1.25.2.3.1.5.10|2|6415951
		1.3.6.1.2.1.25.2.3.1.5.11|2|6415951
		1.3.6.1.2.1.25.2.3.1.5.12|2|6415951
		1.3.6.1.2.1.25.2.3.1.5.13|2|12866719
		1.3.6.1.2.1.25.2.3.1.5.14|2|25768264
		1.3.6.1.2.1.25.2.3.1.5.15|2|6415951
		1.3.6.1.2.1.25.2.3.1.5.16|2|12866719
		1.3.6.1.2.1.25.2.3.1.5.17|2|2545486
		1.3.6.1.2.1.25.2.3.1.5.18|2|804292
		1.3.6.1.2.1.25.2.3.1.5.19|2|256
		1.3.6.1.2.1.25.2.3.1.5.20|2|24681060
		1.3.6.1.2.1.25.2.3.1.6.1|2|0
		1.3.6.1.2.1.25.2.3.1.6.2|2|219
		1.3.6.1.2.1.25.2.3.1.6.3|2|171
		1.3.6.1.2.1.25.2.3.1.6.4|2|0
		1.3.6.1.2.1.25.2.3.1.6.5|2|1689791
		1.3.6.1.2.1.25.2.3.1.6.6|2|353
		1.3.6.1.2.1.25.2.3.1.6.7|2|1116269
		1.3.6.1.2.1.25.2.3.1.6.8|2|998231
		1.3.6.1.2.1.25.2.3.1.6.9|2|34688
		1.3.6.1.2.1.25.2.3.1.6.10|2|14081
		1.3.6.1.2.1.25.2.3.1.6.11|2|154818
		1.3.6.1.2.1.25.2.3.1.6.12|2|11251
		1.3.6.1.2.1.25.2.3.1.6.13|2|147353
		1.3.6.1.2.1.25.2.3.1.6.14|2|22317505
		1.3.6.1.2.1.25.2.3.1.6.15|2|142323
		1.3.6.1.2.1.25.2.3.1.6.16|2|80643
		1.3.6.1.2.1.25.2.3.1.6.17|2|5757
		1.3.6.1.2.1.25.2.3.1.6.18|2|211836
		1.3.6.1.2.1.25.2.3.1.6.19|2|0
		1.3.6.1.2.1.25.2.3.1.6.20|2|10620972
		1.3.6.1.2.1.25.2.3.1.7.1|65|0
		1.3.6.1.2.1.25.2.3.1.7.2|65|0
		1.3.6.1.2.1.25.2.3.1.7.3|65|0
		1.3.6.1.2.1.25.2.3.1.7.4|65|0
		1.3.6.1.2.1.25.2.3.1.7.5|65|0
		1.3.6.1.2.1.25.2.3.1.7.6|65|0
		1.3.6.1.2.1.25.2.3.1.7.7|65|0
		1.3.6.1.2.1.25.2.3.1.7.8|65|0
		1.3.6.1.2.1.25.2.3.1.7.9|65|0
		1.3.6.1.2.1.25.2.3.1.7.10|65|0
		1.3.6.1.2.1.25.2.3.1.7.11|65|0
		1.3.6.1.2.1.25.2.3.1.7.12|65|0
		1.3.6.1.2.1.25.2.3.1.7.13|65|0
		1.3.6.1.2.1.25.2.3.1.7.14|65|0
		1.3.6.1.2.1.25.2.3.1.7.15|65|0
		1.3.6.1.2.1.25.2.3.1.7.16|65|0
		1.3.6.1.2.1.25.2.3.1.7.17|65|0
		1.3.6.1.2.1.25.2.3.1.7.18|65|0
		1.3.6.1.2.1.25.2.3.1.7.19|65|0
		1.3.6.1.2.1.25.2.3.1.7.20|65|0
		";
		return $snmpdata;
	}

	/**
	 * Storage testing
	 *
	 * @dataProvider snmpArgsProvider
	 */
	public function test_list_storage_units($conn_args) {
		$this->assertCommand($conn_args, "-D --list", array(
		), array(
			"/dev            : FixedDisk      4K-blocks     0.00% used of 11.76GiB. 11.76GiB free\n".
			"/dev/shm        : FixedDisk      4K-blocks     0.01% used of 11.77GiB. 11.77GiB free\n".
			"/run            : FixedDisk      4K-blocks     0.01% used of 11.77GiB. 11.77GiB free\n".
			"/sys/fs/cgroup  : FixedDisk      4K-blocks     0.00% used of 11.77GiB. 11.77GiB free\n".
			"/               : FixedDisk      4K-blocks    60.95% used of 10.58GiB. 4.13GiB free\n".
			"/tmp            : FixedDisk      4K-blocks     0.01% used of 11.77GiB. 11.77GiB free\n".
			"/storage/updatemgr: FixedDisk      4K-blocks     4.33% used of 98.30GiB. 94.04GiB free\n".
			"/storage/log    : FixedDisk      4K-blocks     9.70% used of 39.24GiB. 35.43GiB free\n".
			"/boot           : FixedDisk      1K-blocks    28.24% used of 119.96MiB. 86.08MiB free\n".
			"/storage/autodeploy: FixedDisk      4K-blocks     0.22% used of 24.47GiB. 24.42GiB free\n".
			"/storage/db     : FixedDisk      4K-blocks     2.41% used of 24.47GiB. 23.88GiB free\n".
			"/storage/imagebuilder: FixedDisk      4K-blocks     0.18% used of 24.47GiB. 24.43GiB free\n".
			"/storage/seat   : FixedDisk      4K-blocks     1.15% used of 49.08GiB. 48.52GiB free\n".
			"/storage/archive: FixedDisk      4K-blocks    86.61% used of 98.30GiB. 13.16GiB free\n".
			"/storage/dblog  : FixedDisk      4K-blocks     2.22% used of 24.47GiB. 23.93GiB free\n".
			"/storage/core   : FixedDisk      4K-blocks     0.63% used of 49.08GiB. 48.78GiB free\n".
			"/storage/netdump: FixedDisk      4K-blocks     0.23% used of 9.71GiB. 9.69GiB free\n".
			"/etc/vmware-content-library/nfsmounts/library-nfs-mount-24ce4993-1c7a-468d-a0d1-9146b59f015c: FixedDisk      256K-blocks    26.34% used of 196.36GiB. 144.64GiB free\n".
			"/var/spool/snmp : FixedDisk      4K-blocks     0.00% used of 1024.00KiB. 1024.00KiB free\n".
			"Real Memory     : Ram            1K-blocks    43.03% used of 23.54GiB. 13.41GiB free"
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_valid_include_name_option($conn_args) {
		$this->assertCommand($conn_args, "-i /", array(
		), array(
			"OK: 1/1 OK (/: 60.95% used of 10.58GiB, 4.13GiB free)",
			"|'/_used'=6921383936B;0:;0:;0;11355283456",
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_valid_include_regex_option($conn_args) {
		$this->assertCommand($conn_args, "--include-regex '^/$'", array(
		), array(
			"OK: 1/1 OK (/: 60.95% used of 10.58GiB, 4.13GiB free)",
			"|'/_used'=6921383936B;0:;0:;0;11355283456",
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_invalid_include_regex_option($conn_args) {
		$this->assertCommand($conn_args, "-e '^/(asd$'", array(
		), array(
			"Failed to compile regular expression: Unmatched ( or \\(",
		), 3);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_invalid_I_option($conn_args) {
		$this->assertCommand($conn_args, "-i invalid", array(
		), array(
			"No storage units match your filters."
		), 3);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_invalid_T_option($conn_args) {
		$this->assertCommand($conn_args, "-i /dev/shm -T this_doesnt_exist", array(
		), array(
			"Invalid type filter: this_doesnt_exist"
		), 3);
	}

	/**
	 * Storage percent used controlled by warning and critical values
	 *
	 * @dataProvider snmpArgsProvider
	 */
	public function test_percent_storage_used_OK($conn_args) {
		$this->assertCommand($conn_args, "-i / -w65 -c75 -m %", array(
		), array(
			"OK: 1/1 OK (/: 60.95% used of 10.58GiB, 4.13GiB free)",
			"|'/_used'=6921383936B;0:7380934246;0:8516462592;0;11355283456",
		), 0);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_percent_storage_used_WARNING($conn_args) {
		$this->assertCommand($conn_args, "-i / -m % -w25 -c75", array(
		), array(
			"WARNING: 1/1 warning (/: 60.95% used of 10.58GiB, 4.13GiB free)",
			"|'/_used'=6921383936B;0:2838820864;0:8516462592;0;11355283456",
		), 1);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_percent_storage_used_CRITICAL($conn_args) {
		$this->assertCommand($conn_args, "-i / -w25:26 -c30:31", array(
		), array(
			"CRITICAL: 1/1 critical (/: 60.95% used of 10.58GiB, 4.13GiB free)",
			"|'/_used'=6921383936B;2838820864:2952373699;3406585037:3520137871;0;11355283456",
		), 2);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_sum_storage_used_CRITICAL($conn_args) {
		$this->assertCommand($conn_args, "-D -S -w 25:26 -c30:31", array(
		), array(
			"CRITICAL: 20 storage units selected. Sum total: 22.39% used of 731.04GiB, 567.39GiB free",
			"|'total_used'=175719153664B;196236279808:204085731000;235483535770:243332986962;0;784945119232",
		), 2);
	}

	/**
	 * Storage prefixedbytes used controlled by warning and critical values
	 *
	 * @dataProvider snmpArgsProvider
	 */
	public function test_gb_prefix_OK($conn_args) {
		$this->assertCommand($conn_args, "-i / -m gib -w30 -c40", array(
		), array(
			"OK: 1/1 OK (/: 60.95% used of 10.58GiB, 4.13GiB free)",
			"|'/_used'=6921383936B;0:32212254720;0:42949672960;0;11355283456",
		), 0);
	}
	/**
	 * Could not fetch the values
	 *
	 * @dataProvider snmpArgsProvider
	 */
	public function test_disk_could_not_fetch_the_value_for_size($conn_args) {
		$this->assertCommand($conn_args, "-i /", array(
			"1.3.6.1.2.1.25.2.3.1.5.1" => array(2,"")
		), array(
			"Failed to read data for storage unit 1 (/dev). Please check your SNMP configuration",
		), 3);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_disk_could_not_fetch_the_value_for_used($conn_args) {
		$this->assertCommand($conn_args, "-i /dev", array(
			"1.3.6.1.2.1.25.2.3.1.6.1" => array(2,"")
		), array(
			"Failed to read data for storage unit 1 (/dev). Please check your SNMP configuration",
		), 3);
	}

	/**
	 * @dataProvider snmpArgsProvider
	 */
	public function test_disk_could_not_fetch_the_value_for_descr($conn_args) {
		$this->assertCommand($conn_args, "-i /", array(
			"1.3.6.1.2.1.25.2.3.1.3.1" => array(2,"")
		), array(
			"Failed to read description for storage unit with index 1. Please check your SNMP configuration"
		), 3);
	}
}
