/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : dissertation_system_manage

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-04-24 18:26:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for academic_dissertation
-- ----------------------------
DROP TABLE IF EXISTS `academic_dissertation`;
CREATE TABLE `academic_dissertation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teach_reasearch_room_ID` varchar(10) NOT NULL COMMENT '教研室ID',
  `title_chinese` varchar(60) NOT NULL COMMENT '论文题目',
  `title_english` varchar(180) NOT NULL COMMENT '论文英文题目',
  `keyword_chinese` varchar(60) NOT NULL COMMENT '论文主题词',
  `keyword_english` varchar(180) NOT NULL COMMENT '论文英文主题词',
  `digest_chinese` text NOT NULL COMMENT '中文摘要',
  `digest_english` text NOT NULL COMMENT '英文摘要',
  `date_start` varchar(8) NOT NULL COMMENT '论文起始日期',
  `date_end` varchar(8) NOT NULL COMMENT '论文终止日期',
  `num_words` decimal(4,2) NOT NULL COMMENT '论文字数',
  `psw_code` varchar(1) NOT NULL COMMENT '论文密码级',
  `type_code` varchar(1) NOT NULL COMMENT '论文类型码',
  `select_source_code` varchar(2) NOT NULL COMMENT '论文选题来源码',
  `win_level_code` varchar(2) NOT NULL COMMENT '论文获奖级别码',
  `award_level_code` varchar(1) NOT NULL COMMENT '奖励等级码',
  `midgraph_classify_code` varchar(10) NOT NULL COMMENT '论文中图文分类号',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of academic_dissertation
-- ----------------------------

-- ----------------------------
-- Table structure for admin_permissions
-- ----------------------------
DROP TABLE IF EXISTS `admin_permissions`;
CREATE TABLE `admin_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '权限名',
  `label` varchar(255) NOT NULL COMMENT '权限解释名称',
  `description` varchar(255) DEFAULT NULL COMMENT '描述与备注',
  `cid` tinyint(4) NOT NULL COMMENT '级别',
  `icon` varchar(255) NOT NULL COMMENT '图标',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_permissions
-- ----------------------------
INSERT INTO `admin_permissions` VALUES ('1', 'admin.permission', '权限管理', '', '0', 'ti-lock', '2016-05-21 10:06:50', '2016-06-22 13:49:09');
INSERT INTO `admin_permissions` VALUES ('2', 'admin.permission.index', '权限列表', '', '1', '', '2016-05-21 10:08:04', '2016-05-21 10:08:04');
INSERT INTO `admin_permissions` VALUES ('3', 'admin.permission.create', '权限添加', '', '1', '', '2016-05-21 10:08:18', '2016-05-21 10:08:18');
INSERT INTO `admin_permissions` VALUES ('4', 'admin.permission.edit', '权限修改', '', '1', '', '2016-05-21 10:08:35', '2016-05-21 10:08:35');
INSERT INTO `admin_permissions` VALUES ('5', 'admin.permission.destroy ', '权限删除', '', '1', '', '2016-05-21 10:09:57', '2016-05-21 10:09:57');
INSERT INTO `admin_permissions` VALUES ('6', 'admin.role.index', '角色列表', '', '1', '', '2016-05-23 10:36:40', '2016-05-23 10:36:40');
INSERT INTO `admin_permissions` VALUES ('7', 'admin.role.create', '角色添加', '', '1', '', '2016-05-23 10:37:07', '2016-05-23 10:37:07');
INSERT INTO `admin_permissions` VALUES ('8', 'admin.role.edit', '角色修改', '', '1', '', '2016-05-23 10:37:22', '2016-05-23 10:37:22');
INSERT INTO `admin_permissions` VALUES ('9', 'admin.role.destroy', '角色删除', '', '1', '', '2016-05-23 10:37:48', '2016-05-23 10:37:48');
INSERT INTO `admin_permissions` VALUES ('10', 'admin.user.index', '用户管理', '', '1', '', '2016-05-23 10:38:52', '2016-05-23 10:38:52');
INSERT INTO `admin_permissions` VALUES ('11', 'admin.user.create', '用户添加', '', '1', '', '2016-05-23 10:39:21', '2016-06-22 13:49:29');
INSERT INTO `admin_permissions` VALUES ('12', 'admin.user.edit', '用户编辑', '', '1', '', '2016-05-23 10:39:52', '2016-05-23 10:39:52');
INSERT INTO `admin_permissions` VALUES ('13', 'admin.user.destroy', '用户删除', '', '1', '', '2016-05-23 10:40:36', '2016-05-23 10:40:36');
INSERT INTO `admin_permissions` VALUES ('14', 'chooseTask.declare', '课题申报环节', '', '0', 'ti-receipt', '2016-05-23 10:40:33', '2016-05-23 10:40:36');
INSERT INTO `admin_permissions` VALUES ('15', 'chooseTask.declare.taskIndex.index', '课题申报', '', '14', '', '2016-05-23 10:40:31', '2016-05-23 10:40:36');
INSERT INTO `admin_permissions` VALUES ('16', 'chooseTask.declare.taskReview.index', '课题审核', '', '14', '', '2016-05-23 10:40:32', '2016-05-23 10:40:36');
INSERT INTO `admin_permissions` VALUES ('17', 'chooseTask.declare.chooseTaskCollect.index', '选题情况汇总', '', '14', '', '2016-05-23 10:40:34', '2016-05-23 10:40:36');
INSERT INTO `admin_permissions` VALUES ('18', 'chooseTask.declare.teachArrange.index', '指导教师安排', '', '14', '', '2016-05-23 10:40:35', '2016-05-23 10:40:36');
INSERT INTO `admin_permissions` VALUES ('19', 'chooseTask.declare.taskCollect.index', '课题汇总', '', '14', '', '2016-05-23 10:40:36', '2016-05-23 10:40:36');
INSERT INTO `admin_permissions` VALUES ('20', 'chooseTask.declare.particiPants.index', '课题参与人确定', '', '14', '', '2016-05-23 10:40:36', '2016-05-23 10:40:36');
INSERT INTO `admin_permissions` VALUES ('21', 'chooseTask.declare.taskModifyApply.index', '课题修改申请审核', '', '14', '', '2016-05-23 10:40:36', '2016-05-23 10:40:36');

-- ----------------------------
-- Table structure for admin_permission_role
-- ----------------------------
DROP TABLE IF EXISTS `admin_permission_role`;
CREATE TABLE `admin_permission_role` (
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_permission_role
-- ----------------------------
INSERT INTO `admin_permission_role` VALUES ('6', '1');
INSERT INTO `admin_permission_role` VALUES ('5', '1');
INSERT INTO `admin_permission_role` VALUES ('4', '1');
INSERT INTO `admin_permission_role` VALUES ('3', '1');
INSERT INTO `admin_permission_role` VALUES ('2', '1');
INSERT INTO `admin_permission_role` VALUES ('7', '1');
INSERT INTO `admin_permission_role` VALUES ('8', '1');
INSERT INTO `admin_permission_role` VALUES ('9', '1');
INSERT INTO `admin_permission_role` VALUES ('10', '1');
INSERT INTO `admin_permission_role` VALUES ('11', '1');
INSERT INTO `admin_permission_role` VALUES ('12', '1');
INSERT INTO `admin_permission_role` VALUES ('13', '1');
INSERT INTO `admin_permission_role` VALUES ('19', '1');
INSERT INTO `admin_permission_role` VALUES ('18', '1');
INSERT INTO `admin_permission_role` VALUES ('17', '1');
INSERT INTO `admin_permission_role` VALUES ('16', '1');
INSERT INTO `admin_permission_role` VALUES ('15', '1');
INSERT INTO `admin_permission_role` VALUES ('20', '1');
INSERT INTO `admin_permission_role` VALUES ('21', '1');
INSERT INTO `admin_permission_role` VALUES ('8', '2');
INSERT INTO `admin_permission_role` VALUES ('7', '2');
INSERT INTO `admin_permission_role` VALUES ('6', '2');
INSERT INTO `admin_permission_role` VALUES ('5', '2');
INSERT INTO `admin_permission_role` VALUES ('4', '2');
INSERT INTO `admin_permission_role` VALUES ('3', '2');
INSERT INTO `admin_permission_role` VALUES ('2', '2');
INSERT INTO `admin_permission_role` VALUES ('9', '2');
INSERT INTO `admin_permission_role` VALUES ('15', '2');
INSERT INTO `admin_permission_role` VALUES ('11', '2');
INSERT INTO `admin_permission_role` VALUES ('12', '2');
INSERT INTO `admin_permission_role` VALUES ('13', '2');

-- ----------------------------
-- Table structure for admin_roles
-- ----------------------------
DROP TABLE IF EXISTS `admin_roles`;
CREATE TABLE `admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '角色名称',
  `description` varchar(255) DEFAULT NULL COMMENT '备注',
  `model_type` varchar(255) DEFAULT NULL COMMENT '对应的模型',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_roles
-- ----------------------------
INSERT INTO `admin_roles` VALUES ('1', '教职工', '教职工描述', 'App\\Models\\StudentBaseInfo', '2017-04-08 15:48:57', '2017-04-08 15:48:57');
INSERT INTO `admin_roles` VALUES ('2', '学生狗', '学生狗描述', 'App\\Models\\TeachBaseInfo', '2017-04-08 15:48:57', '2017-04-08 15:48:57');

-- ----------------------------
-- Table structure for admin_role_user
-- ----------------------------
DROP TABLE IF EXISTS `admin_role_user`;
CREATE TABLE `admin_role_user` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_role_user
-- ----------------------------
INSERT INTO `admin_role_user` VALUES ('1', '1');
INSERT INTO `admin_role_user` VALUES ('2', '2');

-- ----------------------------
-- Table structure for admin_users
-- ----------------------------
DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员用户表ID',
  `user_id` int(11) NOT NULL COMMENT '用户模型ID',
  `userable_type` varchar(255) NOT NULL COMMENT '用户对应的模型',
  `role_id` varchar(255) NOT NULL COMMENT '角色表外键',
  `name` varchar(30) NOT NULL COMMENT '姓名',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `password` varchar(255) NOT NULL COMMENT '密码',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_users
-- ----------------------------
INSERT INTO `admin_users` VALUES ('1', '1', 'App\\Models\\TeachBaseInfo', '1', 'teach', 'teach@teach.com', '$2y$10$kZMOrFg2b9CT9MEqPOGmgOhwckhjQJ885..GuZL7Xsdm/AM29uu4a', 'yl17P0QCuvTNa2w8UnEDUDMtm29IxF6TctKeFBnCxnFss745Bv2UWRknbCZH', '2017-04-17 12:03:01', '2017-04-17 12:03:01');
INSERT INTO `admin_users` VALUES ('2', '1', 'App\\Models\\StudentBaseInfo', '2', 'student', 'student@student.com', '$2y$10$IY4pnbwlFXrIP9lAWnaLsugcfUZ4e/rB8IOsG7jBoF7s3f/EWBJCu', 'yermpQLe2Ede7fr1jeUdLpUPfbIi3cnmXLGD98rAuDse49blNjDQH0BUEFyE', '2017-04-17 12:03:01', '2017-04-24 10:25:07');

-- ----------------------------
-- Table structure for answer_ppt
-- ----------------------------
DROP TABLE IF EXISTS `answer_ppt`;
CREATE TABLE `answer_ppt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subjectInfo_id` varchar(10) NOT NULL,
  `studentBaseInfo_id` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of answer_ppt
-- ----------------------------

-- ----------------------------
-- Table structure for answer_team_assigned
-- ----------------------------
DROP TABLE IF EXISTS `answer_team_assigned`;
CREATE TABLE `answer_team_assigned` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `studentBaseInfo_id` varchar(10) NOT NULL,
  `professionInfo_id` varchar(6) NOT NULL,
  `classesInfo_id` varchar(10) NOT NULL,
  `subjectInfo_id` varchar(10) NOT NULL,
  `teachBaseInfo_id` varchar(10) NOT NULL,
  `group_leader` varchar(10) NOT NULL,
  `group_member` varchar(50) NOT NULL,
  `answer_time` datetime NOT NULL,
  `answer_place` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of answer_team_assigned
-- ----------------------------

-- ----------------------------
-- Table structure for answer_team_query
-- ----------------------------
DROP TABLE IF EXISTS `answer_team_query`;
CREATE TABLE `answer_team_query` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teachBaseInfo_id` varchar(6) NOT NULL,
  `professionInfo_id` varchar(6) NOT NULL,
  `studentBaseInfo_id` varchar(10) NOT NULL,
  `subjectInfo_id` varchar(10) NOT NULL,
  `group_order` varchar(8) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of answer_team_query
-- ----------------------------

-- ----------------------------
-- Table structure for classes_info
-- ----------------------------
DROP TABLE IF EXISTS `classes_info`;
CREATE TABLE `classes_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classes` varchar(255) NOT NULL COMMENT '班級',
  `date_build` varchar(255) NOT NULL COMMENT '建班年月',
  `class_directorID` varchar(255) NOT NULL COMMENT '班主任教工号',
  `monitorID` varchar(255) NOT NULL COMMENT '班长学号',
  `instructorID` varchar(255) NOT NULL COMMENT '辅导员号',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of classes_info
-- ----------------------------

-- ----------------------------
-- Table structure for dissertation_answer_committeeman
-- ----------------------------
DROP TABLE IF EXISTS `dissertation_answer_committeeman`;
CREATE TABLE `dissertation_answer_committeeman` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `duty_code` varchar(3) NOT NULL,
  `unit` varchar(60) NOT NULL,
  `isTutor` varchar(1) NOT NULL,
  `isChairman` varchar(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dissertation_answer_committeeman
-- ----------------------------

-- ----------------------------
-- Table structure for dissertation_grade
-- ----------------------------
DROP TABLE IF EXISTS `dissertation_grade`;
CREATE TABLE `dissertation_grade` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teachBaseInfo_id` varchar(10) NOT NULL,
  `studentBaseInfo` varchar(6) NOT NULL,
  `professionInfo` varchar(8) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dissertation_grade
-- ----------------------------

-- ----------------------------
-- Table structure for dissertation_select_topic
-- ----------------------------
DROP TABLE IF EXISTS `dissertation_select_topic`;
CREATE TABLE `dissertation_select_topic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teachBaseInfo_id` varchar(10) NOT NULL,
  `studentBaseInfo_id` varchar(10) NOT NULL,
  `subjectInfo_id` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dissertation_select_topic
-- ----------------------------

-- ----------------------------
-- Table structure for dissertation_update_topic
-- ----------------------------
DROP TABLE IF EXISTS `dissertation_update_topic`;
CREATE TABLE `dissertation_update_topic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `studentBaseInfo_id` varchar(10) NOT NULL,
  `subjectInfo_id` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dissertation_update_topic
-- ----------------------------

-- ----------------------------
-- Table structure for grade_query
-- ----------------------------
DROP TABLE IF EXISTS `grade_query`;
CREATE TABLE `grade_query` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `studentBaseInfo_id` varchar(10) NOT NULL,
  `teachBaseInfo_id` varchar(6) NOT NULL,
  `subjectInfo_id` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of grade_query
-- ----------------------------

-- ----------------------------
-- Table structure for midtime_exam
-- ----------------------------
DROP TABLE IF EXISTS `midtime_exam`;
CREATE TABLE `midtime_exam` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `professionInfo_id` varchar(10) NOT NULL COMMENT '课题号',
  `title` varchar(10) NOT NULL COMMENT '设计题目',
  `studentBaseInfo_id` varchar(10) NOT NULL COMMENT '学号',
  `date_begin` varchar(6) NOT NULL COMMENT '起始时间',
  `place` varchar(30) NOT NULL COMMENT '设计地点',
  `teachBaseInfo_id` varchar(10) NOT NULL COMMENT '教工号',
  `work_analyze_include` text NOT NULL COMMENT '工作分析总结',
  `adjust_change` text NOT NULL COMMENT '调整和变动',
  `reason` text NOT NULL COMMENT '原因何在',
  `opinion_teacher` text NOT NULL COMMENT '指导教师意见',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of midtime_exam
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2016_11_10_033438_create_admin_users_table', '1');
INSERT INTO `migrations` VALUES ('4', '2016_11_10_034922_create_admin_permissions_table', '1');
INSERT INTO `migrations` VALUES ('5', '2016_11_10_034952_create_admin_roles_table', '1');
INSERT INTO `migrations` VALUES ('6', '2016_11_10_035417_create_admin_role_user_table', '1');
INSERT INTO `migrations` VALUES ('7', '2016_11_10_035534_create_admin_permission_role_table', '1');
INSERT INTO `migrations` VALUES ('8', '2017_03_22_063533_create_teachBaseInfo_table', '1');
INSERT INTO `migrations` VALUES ('9', '2017_03_22_072254_create_studentBase_table', '1');
INSERT INTO `migrations` VALUES ('10', '2017_03_22_074214_create_classesInfo_table', '1');
INSERT INTO `migrations` VALUES ('11', '2017_03_22_081055_create_academicDissertation_Table', '1');
INSERT INTO `migrations` VALUES ('12', '2017_03_22_082509_create_professionInfo_table', '1');
INSERT INTO `migrations` VALUES ('13', '2017_03_22_083318_create_openingReport_table', '1');
INSERT INTO `migrations` VALUES ('14', '2017_03_22_083937_create_taskdoc_table', '1');
INSERT INTO `migrations` VALUES ('15', '2017_03_22_085438_create_subjectInfo_table', '1');
INSERT INTO `migrations` VALUES ('16', '2017_03_23_115630_create_weekly_table', '1');
INSERT INTO `migrations` VALUES ('17', '2017_03_23_120434_create_midtimeExam_table', '1');
INSERT INTO `migrations` VALUES ('18', '2017_03_24_045646_create_answerTeamAssigned_table', '1');
INSERT INTO `migrations` VALUES ('19', '2017_03_24_045738_create_timeSlotTaskArrive_table', '1');
INSERT INTO `migrations` VALUES ('20', '2017_03_24_045902_create_dissertationGrade_table', '1');
INSERT INTO `migrations` VALUES ('21', '2017_03_24_045956_create_dissertationAnswerCommitteeman_table', '1');
INSERT INTO `migrations` VALUES ('22', '2017_03_24_050048_create_dissertationSelectTopic_table', '1');
INSERT INTO `migrations` VALUES ('23', '2017_03_24_050139_create_subjectMember_table', '1');
INSERT INTO `migrations` VALUES ('24', '2017_03_24_050210_create_answerTeamQuery_table', '1');
INSERT INTO `migrations` VALUES ('25', '2017_03_24_050240_create_gradeQuery_table', '1');
INSERT INTO `migrations` VALUES ('26', '2017_03_24_050325_create_teachGrouping_table', '1');
INSERT INTO `migrations` VALUES ('27', '2017_03_24_050353_create_subjectTopicSelect_table', '1');
INSERT INTO `migrations` VALUES ('28', '2017_03_24_050441_create_answerPPT_table', '1');
INSERT INTO `migrations` VALUES ('29', '2017_03_24_050504_create_dissertationUpdateTopic_table', '1');
INSERT INTO `migrations` VALUES ('30', '2017_03_24_050525_create_studentGrouping_table', '1');

-- ----------------------------
-- Table structure for opening_report
-- ----------------------------
DROP TABLE IF EXISTS `opening_report`;
CREATE TABLE `opening_report` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `professionInfo_id` varchar(6) NOT NULL COMMENT '专业号',
  `subjectDesign` varchar(50) NOT NULL COMMENT '设计题目',
  `studentBaseInfo_id` varchar(10) NOT NULL COMMENT '学号',
  `date_start` varchar(30) NOT NULL COMMENT '起始时间',
  `place_design` varchar(30) NOT NULL COMMENT '设计地点',
  `teachBaseInfo_id` varchar(10) NOT NULL COMMENT '教工号',
  `subject_task_statetext` text NOT NULL COMMENT '课题任务情况',
  `method_use` text NOT NULL COMMENT '采用方法',
  `opinion_teacher` text NOT NULL COMMENT '指导教师意见',
  `opinion_college` text NOT NULL COMMENT '学院意见',
  `state` varchar(2) NOT NULL COMMENT '状态',
  `opinion_feedback` text NOT NULL COMMENT '反馈意见',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of opening_report
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for profession_info
-- ----------------------------
DROP TABLE IF EXISTS `profession_info`;
CREATE TABLE `profession_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL COMMENT '专业名称',
  `name_short` varchar(20) NOT NULL COMMENT '专业简称',
  `name_english` varchar(180) NOT NULL COMMENT '专业英文名称',
  `direction_number` varchar(2) NOT NULL COMMENT '专业方向号',
  `department_number` varchar(8) NOT NULL COMMENT '院系所号',
  `length_school` double(3,1) NOT NULL COMMENT '学制',
  `subject_kind_code` varchar(2) NOT NULL COMMENT '学科门类码',
  `profession_code_bk` varchar(6) NOT NULL COMMENT '本专科专业码',
  `profession_code_yjs` varchar(6) NOT NULL COMMENT '研究生专业码',
  `date_build` varchar(6) NOT NULL COMMENT '建立年月',
  `term_start` varchar(1) NOT NULL COMMENT '起始学期',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of profession_info
-- ----------------------------

-- ----------------------------
-- Table structure for student_base_info
-- ----------------------------
DROP TABLE IF EXISTS `student_base_info`;
CREATE TABLE `student_base_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_spell` varchar(60) DEFAULT NULL COMMENT '姓名拼音',
  `student_QQ` varchar(20) DEFAULT NULL COMMENT '学生QQ',
  `student_phone` varchar(20) DEFAULT NULL COMMENT '学生电话',
  `name_before` varchar(30) DEFAULT NULL COMMENT '曾用名',
  `sex_code` varchar(1) DEFAULT NULL COMMENT '性别码',
  `birthday` varchar(8) DEFAULT NULL COMMENT '出生日期',
  `birth_addr_code` varchar(6) DEFAULT NULL COMMENT '出生地码',
  `native_place` varchar(20) DEFAULT NULL COMMENT '籍贯',
  `nation_code` varchar(2) DEFAULT NULL COMMENT '民族码',
  `nationility_code` varchar(3) DEFAULT NULL COMMENT '国籍/地区码',
  `identity_type` varchar(1) DEFAULT NULL COMMENT '身份证件类型码',
  `identity_number` varchar(20) DEFAULT NULL COMMENT '身份证件号',
  `marriage_status_code` varchar(2) DEFAULT NULL COMMENT '婚姻状况码',
  `conuntrymen_code` varchar(2) DEFAULT NULL COMMENT '港澳台侨外码',
  `politics_status` varchar(1) DEFAULT NULL COMMENT '政治面貌',
  `health_status` varchar(1) DEFAULT NULL COMMENT '健康状态码',
  `religion` varchar(1) DEFAULT NULL COMMENT '信仰宗教码',
  `blood_type_code` varchar(2) DEFAULT NULL COMMENT '血型码',
  `photo` varchar(255) DEFAULT NULL COMMENT '照片',
  `identity_valid` varchar(17) DEFAULT NULL COMMENT '身份证件有效期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student_base_info
-- ----------------------------
INSERT INTO `student_base_info` VALUES ('1', '22', '3', '3', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');
INSERT INTO `student_base_info` VALUES ('2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');
INSERT INTO `student_base_info` VALUES ('3', '3', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');
INSERT INTO `student_base_info` VALUES ('4', '4', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');
INSERT INTO `student_base_info` VALUES ('5', '5', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');
INSERT INTO `student_base_info` VALUES ('6', '6', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');
INSERT INTO `student_base_info` VALUES ('7', '7', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');
INSERT INTO `student_base_info` VALUES ('8', '8', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');
INSERT INTO `student_base_info` VALUES ('9', '9', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');
INSERT INTO `student_base_info` VALUES ('10', '10', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');
INSERT INTO `student_base_info` VALUES ('11', '11', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2');
INSERT INTO `student_base_info` VALUES ('12', '3', '3', '3', null, null, null, null, null, null, null, null, null, null, null, '3', null, '3', null, null, null);

-- ----------------------------
-- Table structure for student_grouping
-- ----------------------------
DROP TABLE IF EXISTS `student_grouping`;
CREATE TABLE `student_grouping` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `studentBaseInfo_id` varchar(10) NOT NULL,
  `classesInfo_id` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student_grouping
-- ----------------------------

-- ----------------------------
-- Table structure for subject_info
-- ----------------------------
DROP TABLE IF EXISTS `subject_info`;
CREATE TABLE `subject_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(50) NOT NULL COMMENT '课程名称',
  `subject_number` varchar(10) NOT NULL COMMENT '项目号',
  `teach_reasearch_room` varchar(10) NOT NULL COMMENT '教研室ID',
  `teachBaseInfo_id` varchar(10) NOT NULL COMMENT '教工号',
  `suitable_level` varchar(10) NOT NULL COMMENT '适用层次',
  `project_background` varchar(255) NOT NULL COMMENT '项目背景',
  `achieve_fun` text NOT NULL COMMENT '实现功能',
  `technology` text NOT NULL COMMENT '采用技术',
  `specification` text NOT NULL COMMENT '规格要求',
  `schedule` text NOT NULL COMMENT '进度及安排',
  `subject_content_require` text NOT NULL COMMENT '提交作品内容及要求',
  `state` varchar(10) NOT NULL COMMENT '状态',
  `opinion_tutor` text NOT NULL COMMENT '导师意见',
  `opinion_trch_room` text NOT NULL COMMENT '教研室审查意见',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of subject_info
-- ----------------------------

-- ----------------------------
-- Table structure for subject_member
-- ----------------------------
DROP TABLE IF EXISTS `subject_member`;
CREATE TABLE `subject_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subjectInfo_id` varchar(10) NOT NULL,
  `teachBaseInfo_id` varchar(10) NOT NULL,
  `studentBaseInfo_id` varchar(10) NOT NULL,
  `professionInfo_id` varchar(6) NOT NULL,
  `headcount_class` varchar(10) NOT NULL,
  `headcount_join` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of subject_member
-- ----------------------------

-- ----------------------------
-- Table structure for subject_topic_select
-- ----------------------------
DROP TABLE IF EXISTS `subject_topic_select`;
CREATE TABLE `subject_topic_select` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `studentBaseInfo_id` varchar(10) NOT NULL,
  `subjectInfo_id` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of subject_topic_select
-- ----------------------------

-- ----------------------------
-- Table structure for task_doc
-- ----------------------------
DROP TABLE IF EXISTS `task_doc`;
CREATE TABLE `task_doc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) NOT NULL COMMENT '课题号',
  `studentBaseInfo_id` varchar(255) NOT NULL COMMENT '学生号',
  `teachBaseInfo_id` varchar(255) NOT NULL COMMENT '教工号',
  `professionInfo_id` varchar(6) NOT NULL COMMENT '专业号',
  `subject_content_require` text NOT NULL COMMENT '课题内容与要求',
  `main_technology_index` text NOT NULL COMMENT '主要技术指标',
  `date_begin` varchar(6) NOT NULL COMMENT '起始日期',
  `iterature_reference` text NOT NULL COMMENT '参考文献',
  `opinion_tutor` text NOT NULL COMMENT '导师意见',
  `opinion_trch_room` text NOT NULL COMMENT '教研室审查意见',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of task_doc
-- ----------------------------

-- ----------------------------
-- Table structure for teach_base_info
-- ----------------------------
DROP TABLE IF EXISTS `teach_base_info`;
CREATE TABLE `teach_base_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unit_number` varchar(8) DEFAULT NULL COMMENT '单位号',
  `name_spell` varchar(60) DEFAULT NULL COMMENT '姓名拼音',
  `teach_reasearch_room_ID` varchar(10) DEFAULT NULL COMMENT '教研室ID',
  `name_before` varchar(30) DEFAULT NULL COMMENT '曾用名',
  `sex_code` varchar(1) DEFAULT NULL COMMENT '性别码',
  `birthday` varchar(8) DEFAULT NULL COMMENT '出生日期',
  `birthday_addr_code` varchar(6) DEFAULT NULL COMMENT '出身地码',
  `native_place` varchar(20) DEFAULT NULL COMMENT '籍贯',
  `nation_code` varchar(2) DEFAULT NULL COMMENT '民族码',
  `nationility_code` varchar(3) DEFAULT NULL COMMENT '国籍/地区码',
  `identity_type` varchar(1) DEFAULT NULL COMMENT '身份证件类型码',
  `identity_number` varchar(20) DEFAULT NULL COMMENT '身份证件号',
  `identity_valid` varchar(17) DEFAULT NULL COMMENT '身份证件有效期',
  `marriage_status_code` varchar(2) DEFAULT NULL COMMENT '婚姻状况码',
  `conuntrymen_code` varchar(2) DEFAULT NULL COMMENT '港澳台桥外码',
  `health_status` varchar(1) DEFAULT NULL COMMENT '健康状态码',
  `religion` varchar(1) DEFAULT NULL COMMENT '信仰宗教码',
  `blood_type_code` varchar(2) DEFAULT NULL COMMENT '血型码',
  `educationest_code` varchar(2) DEFAULT NULL COMMENT '最高学历码',
  `culture_standard_code` varchar(2) DEFAULT NULL COMMENT '文化程度码',
  `date_first_work` varchar(6) DEFAULT NULL COMMENT '参加工作年月',
  `data_come_school` varchar(8) DEFAULT NULL COMMENT '来校日期',
  `date_start_salary` varchar(8) DEFAULT NULL COMMENT '起薪日期',
  `date_start_teach` varchar(6) DEFAULT NULL COMMENT '从教年月',
  `authorized_strength_code` varchar(2) DEFAULT NULL COMMENT '编制类型码',
  `teach_staff_type_code` varchar(2) DEFAULT NULL COMMENT '教职工类别码',
  `teach_status_code` varchar(2) DEFAULT NULL COMMENT '任课状况码',
  `record_number` varchar(10) DEFAULT NULL COMMENT '档案编号',
  `record_text` text COMMENT '档案文本',
  `current_state_code` varchar(2) DEFAULT NULL COMMENT '当前状态码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teach_base_info
-- ----------------------------
INSERT INTO `teach_base_info` VALUES ('1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `teach_base_info` VALUES ('2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `teach_base_info` VALUES ('3', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `teach_base_info` VALUES ('4', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `teach_base_info` VALUES ('5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `teach_base_info` VALUES ('6', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `teach_base_info` VALUES ('7', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `teach_base_info` VALUES ('8', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `teach_base_info` VALUES ('9', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `teach_base_info` VALUES ('10', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `teach_base_info` VALUES ('11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `teach_base_info` VALUES ('17', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('18', '77777', '77777', '77', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', '1', '2', '1', '1');
INSERT INTO `teach_base_info` VALUES ('19', '1111', '11111', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('20', '1111', '11111', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('21', '1111', '11111', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('22', '1111', '11111', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('23', '222', '222', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('24', '222', '222', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('25', '111', '1111', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('26', '11121321', '1231231', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('27', '11121321', '1231231', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('28', '111', '111', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('29', '111', '111', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('30', '231212', '12312', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('31', '231212', '12312', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('32', '111', '2121', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('33', '111', '2121', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('34', '23123', '3121', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `teach_base_info` VALUES ('35', '23123', '3121', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for teach_grouping
-- ----------------------------
DROP TABLE IF EXISTS `teach_grouping`;
CREATE TABLE `teach_grouping` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teachBaseInfo_id` varchar(10) NOT NULL,
  `groupKind` varchar(10) NOT NULL,
  `jurisdiction` varchar(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teach_grouping
-- ----------------------------

-- ----------------------------
-- Table structure for time_slot_task_arrive
-- ----------------------------
DROP TABLE IF EXISTS `time_slot_task_arrive`;
CREATE TABLE `time_slot_task_arrive` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `teach_reasearch_room_ID` varchar(10) NOT NULL,
  `byTeachStaffNo` varchar(10) NOT NULL,
  `toTeachStaffNo` varchar(10) NOT NULL,
  `arrive_time_task` varchar(8) NOT NULL,
  `name_task` varchar(180) NOT NULL,
  `date_begin` varchar(8) NOT NULL,
  `date_end` varchar(8) NOT NULL,
  `content_task` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of time_slot_task_arrive
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'LinxwFF', '874226876@admin.com', '$2y$10$frfp7FasjdL.5amqwEIRA.T/pVCz7oTJEKkh59GVQ6mFjWYiiGJii', 'tXOwj26yvRHEk3NpKeUbU0QCPJRjbOIu61WT2wEgZu2TM1VupIkR2bgcoZkV', '2017-04-08 15:48:57', '2017-04-08 15:48:57');

-- ----------------------------
-- Table structure for weekly
-- ----------------------------
DROP TABLE IF EXISTS `weekly`;
CREATE TABLE `weekly` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subjectInfo_id` varchar(10) NOT NULL COMMENT '课题号',
  `studentBaseInfo_id` varchar(10) NOT NULL COMMENT '学号',
  `teachBaseInfo_id` varchar(10) NOT NULL COMMENT '教工号',
  `professionInfo_id` varchar(6) NOT NULL COMMENT '专业号',
  `classesInfo_id` varchar(10) NOT NULL COMMENT '班号',
  `date_begin` varchar(30) NOT NULL COMMENT '起始时间',
  `cycle` varchar(8) NOT NULL COMMENT '周次',
  `time` varchar(50) NOT NULL COMMENT '时间',
  `place` varchar(30) NOT NULL COMMENT '设计地点',
  `tutor_guidet_record` text NOT NULL COMMENT '导师指导记录',
  `worklogs` text NOT NULL COMMENT '毕业设计记录工作',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of weekly
-- ----------------------------
