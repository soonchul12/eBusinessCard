#!/bin/bash

# FTP 서버 정보
FTP_HOST="soonchul.dothome.co.kr"
FTP_USER="soonchul"
FTP_PASS="tnscjfqlqjs12!"

echo "🚀 자동 업로드 시스템 시작!"
echo "📁 index.php와 send_mail.php 파일 변경을 감시합니다."
echo "🔄 파일이 변경되면 자동으로 서버에 업로드됩니다."
echo "⏹️  중지하려면 Ctrl+C를 누르세요."
echo ""

# 파일 변경 감시 및 자동 업로드
fswatch -o index.php send_mail.php | while read f; do
    echo "📤 파일 변경 감지! 업로드 중..."
    
    # index.php 업로드
    if [ -f "index.php" ]; then
        curl -T "index.php" "ftp://$FTP_HOST/html/" --user "$FTP_USER:$FTP_PASS" --silent
        echo "✅ index.php 업로드 완료! $(date '+%H:%M:%S')"
    fi
    
    # send_mail.php 업로드
    if [ -f "send_mail.php" ]; then
        curl -T "send_mail.php" "ftp://$FTP_HOST/html/" --user "$FTP_USER:$FTP_PASS" --silent
        echo "✅ send_mail.php 업로드 완료! $(date '+%H:%M:%S')"
    fi
    
    echo "🌐 http://soonchul.dothome.co.kr/ 에서 확인하세요."
    echo "---"
done 