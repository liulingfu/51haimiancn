﻿echo "----更新代码----"
git pull
echo "---开始上传文件---"
git add * && git commit -m "add modify files" && git push origin master
echo "---上传完成----"
