#!/bin/bash

# FTP 서버 정보
FTP_HOST="soonchul.dothome.co.kr"
FTP_USER="soonchul"
FTP_PASS="tnscjfqlqjs12!"

# 감시할 파일들
FILES=("index.php" "send_mail.php")

echo "👀 파일 변경 감시 시작..."
echo "📁 감시 중인 파일들: ${FILES[*]}"
echo "🔄 파일이 변경되면 자동으로 업로드됩니다."
echo "⏹️  중지하려면 Ctrl+C를 누르세요."
echo ""

# 파일 변경 감시 함수
upload_file() {
    local file="$1"
    echo "📤 $file 변경 감지! 업로드 중..."
    curl -T "$file" "ftp://$FTP_HOST/" --user "$FTP_USER:$FTP_PASS" --silent
    if [ $? -eq 0 ]; then
        echo "✅ $file 업로드 완료! $(date '+%H:%M:%S')"
        echo "🌐 http://soonchul.dothome.co.kr/ 에서 확인하세요."
    else
        echo "❌ $file 업로드 실패!"
    fi
    echo ""
}

# 각 파일에 대해 감시 시작
for file in "${FILES[@]}"; do
    if [ -f "$file" ]; then
        # 백그라운드에서 파일 감시
        (
            while true; do
                inotifywait -e modify "$file" 2>/dev/null || fswatch -o "$file" | head -1 >/dev/null 2>&1
                upload_file "$file"
            done
        ) &
        echo "👁️  $file 감시 시작"
    else
        echo "⚠️  $file 파일을 찾을 수 없습니다."
    fi
done

# 메인 프로세스 대기
wait 