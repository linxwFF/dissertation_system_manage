# 毕业设计论文指导管理系统
# 安装说明

> 安装本项目跟普通安装一样
1. 下载本项目,然后在项目根目录执行 composer install
2. 包安装完成后,复制.env.example 文件为.env (数据库 dissertation_system_manage)
3. 执行 php artisan key:generate
4. 迁移数据: php artisan migrate And php artisan db:seed

# 关于测试用户的帐号和密码

> 教师
帐号： teach@teach.com  密码: teach

> 学生
帐号:  student@student.com 密码： student
