<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        CREATE TABLE `bs_invoice` (
//    `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
//  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加业务员id',
//  `invoice_type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '发票类型 1:普通发票 2:增值税发票',
//  `company_name` varchar(255) NOT NULL DEFAULT '' COMMENT '单位名称',
//  `taxpayer_code` varchar(255) NOT NULL DEFAULT '0' COMMENT '纳税人识别码',
//  `invoice_content` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '发票内容 1:商品明细 2:商品类别',
//  `register_addr` varchar(255) DEFAULT '' COMMENT '注册地址',
//  `register_phone` varchar(255) DEFAULT '0' COMMENT '注册电话',
//  `bank_name` varchar(255) DEFAULT '' COMMENT '开户银行',
//  `bank_account` varchar(255) DEFAULT NULL COMMENT '银行账号',
//  `add_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
//  `modify_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
//  `mark` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '删除状态0:已删除1:正常',
//  PRIMARY KEY (`id`),
//  KEY `user_id` (`user_id`),
//  KEY `add_time` (`add_time`)
//) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8 COMMENT='发票';
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->string('user_id')->default(' ')->comment('my comment');
            $table->integer('invoice_type')->default(0)->comment('my comment');
            $table->string('company_name')->default(' ')->comment('my comment');
            $table->string('taxpayer_code')->default(' ')->comment('my comment');
            $table->integer('invoice_content')->default(0)->comment('my comment');
            $table->string('register_addr')->default(' ')->comment('my comment');
            $table->string('register_phone')->default(' ')->comment('my comment');
            $table->string('bank_name')->default(' ')->comment('my comment');
            $table->string('bank_account')->default(' ')->comment('my comment');
//            $table->timestamp('time')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('modify_time')->default(\DB::raw('CURRENT_TIMESTAMP'))->comment('my comment');
            $table->timestamp('add_time')->default(\DB::raw('CURRENT_TIMESTAMP'))->comment('my comment');
            $table->integer('mark')->default(1)->comment('my comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
