#!/bin/bash

# 设置你的PHP脚本文件路径
php_script_path="C:/Users/86138/Desktop/临时工作文档/html5pc静态模板（含响应式）/扁平化设计Bootstrap3后台管理模板SB Admin/综合项目/forms.php"

# 设置你的静态页面文件路径
output_html_path="C:/Users/86138/Desktop/临时工作文档/html5pc静态模板（含响应式）/扁平化设计Bootstrap3后台管理模板SB Admin/综合项目/output2.html"

# 执行PHP脚本并生成静态页面
php "$php_script_path" > "$output_html_path"

# 检查生成是否成功
if [ $? -eq 0 ]; then
    echo "静态页面生成成功！"
else
    echo "生成静态页面失败，请检查PHP脚本是否有问题。"
fi
