#!/bin/bash

# FTP 서버 정보
FTP_HOST="soonchul.dothome.co.kr"
FTP_USER="soonchul"
FTP_PASS="tnscjfqlqjs12!"

# 업로드할 파일들
FILES=("index.php" "send_mail.php")

echo "🔄 파일 업로드 시작..."

for file in "${FILES[@]}"; do
    if [ -f "$file" ]; then
        echo "📤 $file 업로드 중..."
        curl -T "$file" "ftp://$FTP_HOST/html/" --user "$FTP_USER:$FTP_PASS" --silent
        if [ $? -eq 0 ]; then
            echo "✅ $file 업로드 완료!"
        else
            echo "❌ $file 업로드 실패!"
        fi
    else
        echo "⚠️  $file 파일을 찾을 수 없습니다."
    fi
done

echo "🎉 모든 파일 업로드 완료!"
echo "🌐 http://soonchul.dothome.co.kr/ 에서 확인하세요." 