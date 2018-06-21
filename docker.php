<?php include('top.php'); ?>
<h3 style="color: #0000FF;">映像檔:</h3>
docker images<br>
docker images -a<br>
映像檔詳細資訊: docker inspect 映像檔名稱<br>
映像檔搜尋: docker search -s 3 nginx<br>
刪除映像檔: docker rmi 映像檔名稱<br>
刪除映像檔: docker rmi 映像檔id<br>
強制刪除映像檔(有容器在也照刪): docker rmi -f 映像檔名稱<br>
儲存映像檔: docker save -o xxx.tar ubuntu:14.04<br>
載入映像檔: docker load &lt; xxx.tar<br>
上傳映像檔到 Docker Hub: docker push 映像檔名稱<br>
<h3 style="color: #0000FF;">容器:</h3>
建立處於停止狀態的容器: docker create -it 映像檔名稱<br>
-t 分配一個終端介面.<br>
-i 設定為互動輸入模式.<br>
建立容器並啟動: docker run ubuntu:14.04 /bin/echo 'Hello!'<br>
建立容器並啟動以及進入容器: docker run -it ubuntu:14.04 /bin/bash<br>
建立容器並啟動(背景): docker run -d ubuntu:14.04 /bin/sh -c "while true; do echo Hello!; sleep 1; done"<br>
建立容器並啟動(背景): docker run -d -p HostPort:ContainerPort 映像檔名稱<br>
啟動容器: docker start 容器id<br>
進入容器: docker attach 容器id<br>
停止容器: docker stop 容器id<br>
刪除容器: docker rm 容器id<br>
從容器建立映像檔: docker commit -m "訊息" -a "作者資訊" 容器id 映像檔名稱<br>
取得容器的輸出: docker logs 容器id<br>
查看執行中的容器: docker ps<br>
查看執行中以及執行結束的容器: docker ps -a<br>
<?php include('bottom.php'); ?>