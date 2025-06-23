<!DOCTYPE html>
<html lang="ko" class="dark">
<head>
  <meta charset="UTF-8">
  <title>온라인 명함 - 자동 업로드 테스트</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script>
    tailwind.config = { darkMode: 'class' }
  </script>
</head>
<body class="bg-blue-100 dark:bg-blue-800 min-h-screen flex flex-col items-center justify-center transition-colors duration-300">
  <div id="about" class="bg-white dark:bg-gray-900 rounded-3xl shadow-xl p-10 max-w-4xl w-full transition-colors duration-300">
    <!-- 상단 로고/이름 -->
    <div class="flex justify-between items-center mb-8">
      <div class="flex items-center space-x-2">
        <span class="bg-blue-200 w-6 h-6 inline-block rounded-full"></span>
        <span class="text-gray-900 dark:text-white font-semibold text-lg">Kwon soonchul</span>
      </div>
      <div class="space-x-6 text-gray-500 dark:text-gray-400 text-sm">
        <a href="#about" class="hover:text-blue-700 dark:hover:text-white"><i class="fas fa-info-circle"></i> 소개</a>
        <a href="#careers" class="hover:text-blue-700 dark:hover:text-white"><i class="fas fa-history"></i> 약력</a>
        <a href="#projects" class="hover:text-blue-700 dark:hover:text-white"><i class="fas fa-project-diagram"></i> 프로젝트</a>
        <a href="#contact" class="hover:text-blue-700 dark:hover:text-white"><i class="fas fa-envelope"></i> 연락</a>
      </div>
    </div>
    <!-- 프로필/이름/직함 -->
    <div class="flex items-center space-x-10">
      <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="프로필" class="w-48 h-48 rounded-full border-8 border-gray-200 dark:border-gray-800 shadow-lg">
      <div>
        <div class="text-blue-600 dark:text-blue-400 font-bold text-xl mb-1">학생</div>
        <div class="text-gray-900 dark:text-white font-extrabold text-4xl mb-2">Kwon soonchul</div>
        <div class="text-gray-700 dark:text-gray-200 text-lg mb-2">권순철 · 洪吉童</div>
        <div class="text-gray-400 text-xs mb-4">동탄 거주</div>
        <div class="flex space-x-3 mt-2">
          <a href="#" class="bg-yellow-400 rounded-full p-2"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/kakaotalk.svg" class="w-5 h-5"></a>
          <a href="#" class="bg-blue-600 rounded-full p-2"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linkedin.svg" class="w-5 h-5"></a>
          <a href="#" class="bg-blue-500 rounded-full p-2"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" class="w-5 h-5"></a>
          <a href="https://www.instagram.com/soonchul12" class="bg-pink-500 rounded-full p-2"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" class="w-5 h-5"></a>
          <a href="#" class="bg-black rounded-full p-2"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/x.svg" class="w-5 h-5"></a>
        </div>
      </div>
    </div>  
    <!-- Videos -->
    <div class="mt-12">
      <div class="text-gray-900 dark:text-white text-xl font-bold mb-4">Videos</div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-3 transition-colors duration-300">
          <iframe class="rounded-lg w-full aspect-video" src="https://www.youtube.com/embed/3Ah0xXJMHJw" allowfullscreen></iframe>
          <div class="text-gray-700 dark:text-gray-200 text-sm mt-2">유튜브 영상 1</div>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-3 transition-colors duration-300">
          <iframe class="rounded-lg w-full aspect-video" src="https://www.youtube.com/embed/cCx4I4Fk5FE" allowfullscreen></iframe>
          <div class="text-gray-700 dark:text-gray-200 text-sm mt-2">유튜브 영상 2</div>
        </div>
      </div>
    </div>
    <!-- Books Section -->
    <div class="mt-16">
      <div class="text-gray-900 dark:text-white text-xl font-bold mb-4">Books</div>
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4">
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-3 flex flex-col items-center">
          <img src="https://picsum.photos/100/150?random=1" alt="의적의 길" class="rounded shadow mb-2 w-20 h-32 object-cover">
          <div class="text-xs text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">의적의 길</div>
          <a href="#" class="text-xs text-blue-500 hover:underline">구입하기</a>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-3 flex flex-col items-center">
          <img src="https://picsum.photos/100/150?random=2" alt="활빈당의 비밀" class="rounded shadow mb-2 w-20 h-32 object-cover">
          <div class="text-xs text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">활빈당의 비밀</div>
          <a href="#" class="text-xs text-blue-500 hover:underline">구입하기</a>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-3 flex flex-col items-center">
          <img src="https://picsum.photos/100/150?random=3" alt="조선을 지키다" class="rounded shadow mb-2 w-20 h-32 object-cover">
          <div class="text-xs text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">조선을 지키다</div>
          <a href="#" class="text-xs text-blue-500 hover:underline">구입하기</a>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-3 flex flex-col items-center">
          <img src="https://picsum.photos/100/150?random=4" alt="홍길동전 해설" class="rounded shadow mb-2 w-20 h-32 object-cover">
          <div class="text-xs text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">홍길동전 해설</div>
          <a href="#" class="text-xs text-blue-500 hover:underline">구입하기</a>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-3 flex flex-col items-center">
          <img src="https://picsum.photos/100/150?random=5" alt="정의의 검" class="rounded shadow mb-2 w-20 h-32 object-cover">
          <div class="text-xs text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">정의의 검</div>
          <a href="#" class="text-xs text-blue-500 hover:underline">구입하기</a>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-3 flex flex-col items-center">
          <img src="https://picsum.photos/100/150?random=6" alt="조선의 영웅들" class="rounded shadow mb-2 w-20 h-32 object-cover">
          <div class="text-xs text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">조선의 영웅들</div>
          <a href="#" class="text-xs text-blue-500 hover:underline">구입하기</a>
        </div>
      </div>
    </div>
    <!-- Projects Section -->
    <div id="projects" class="mt-16">
      <div class="text-gray-900 dark:text-white text-xl font-bold mb-4">Projects</div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-4 flex flex-col items-center">
          <img src="https://picsum.photos/120/80?random=21" alt="활빈당 앱 개발" class="rounded shadow mb-2 w-28 h-20 object-cover">
          <div class="text-sm text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">활빈당 앱 개발</div>
          <div class="text-xs text-gray-600 dark:text-gray-300 text-center">백성을 위한 의적단 커뮤니티 앱 제작</div>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-4 flex flex-col items-center">
          <img src="https://picsum.photos/120/80?random=22" alt="조선 지도 서비스" class="rounded shadow mb-2 w-28 h-20 object-cover">
          <div class="text-sm text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">조선 지도 서비스</div>
          <div class="text-xs text-gray-600 dark:text-gray-300 text-center">조선 전역의 의적 활동 지역 지도화</div>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-4 flex flex-col items-center">
          <img src="https://picsum.photos/120/80?random=23" alt="비밀 암호 시스템" class="rounded shadow mb-2 w-28 h-20 object-cover">
          <div class="text-sm text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">비밀 암호 시스템</div>
          <div class="text-xs text-gray-600 dark:text-gray-300 text-center">활빈당 내부 통신용 암호 개발</div>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-4 flex flex-col items-center">
          <img src="https://picsum.photos/120/80?random=24" alt="의적 연합 포털" class="rounded shadow mb-2 w-28 h-20 object-cover">
          <div class="text-sm text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">의적 연합 포털</div>
          <div class="text-xs text-gray-600 dark:text-gray-300 text-center">조선 내 의적단체 정보 공유 포털</div>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-4 flex flex-col items-center">
          <img src="https://picsum.photos/120/80?random=25" alt="백성 지원 시스템" class="rounded shadow mb-2 w-28 h-20 object-cover">
          <div class="text-sm text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">백성 지원 시스템</div>
          <div class="text-xs text-gray-600 dark:text-gray-300 text-center">가난한 백성 지원 자동화 시스템</div>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-4 flex flex-col items-center">
          <img src="https://picsum.photos/120/80?random=26" alt="조선 알림 서비스" class="rounded shadow mb-2 w-28 h-20 object-cover">
          <div class="text-sm text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">조선 알림 서비스</div>
          <div class="text-xs text-gray-600 dark:text-gray-300 text-center">중요 소식 실시간 알림 시스템</div>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-4 flex flex-col items-center">
          <img src="https://picsum.photos/120/80?random=27" alt="비밀 은신처 지도" class="rounded shadow mb-2 w-28 h-20 object-cover">
          <div class="text-sm text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">비밀 은신처 지도</div>
          <div class="text-xs text-gray-600 dark:text-gray-300 text-center">의적단 은신처 위치 정보화</div>
        </div>
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-4 flex flex-col items-center">
          <img src="https://picsum.photos/120/80?random=28" alt="조선 소식지 제작" class="rounded shadow mb-2 w-28 h-20 object-cover">
          <div class="text-sm text-center text-gray-900 dark:text-white font-semibold mt-2 mb-1">조선 소식지 제작</div>
          <div class="text-xs text-gray-600 dark:text-gray-300 text-center">백성을 위한 소식지 발간 프로젝트</div>
        </div>
      </div>
    </div>
    <!-- Careers & Education Section -->
    <div id="careers" class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-10">
      <!-- Careers -->
      <div>
        <div class="text-gray-900 dark:text-white text-lg font-bold mb-4">Careers</div>
        <div class="space-y-6">
          <div>
            <div class="text-xs bg-blue-900 text-white rounded-full px-2 py-0.5 inline-block mb-1">1612 ~ 현재</div>
            <div class="font-semibold text-gray-900 dark:text-white">활빈당 수장 (Head of Hwalbindang)</div>
            <div class="text-xs text-gray-500 dark:text-gray-300">조선의 의적단체 활빈당을 이끌며 백성의 권익을 위해 활동</div>
          </div>
          <div>
            <div class="text-xs bg-blue-900 text-white rounded-full px-2 py-0.5 inline-block mb-1">1605 ~ 1612</div>
            <div class="font-semibold text-gray-900 dark:text-white">산적 연합 리더</div>
            <div class="text-xs text-gray-500 dark:text-gray-300">조선 각지의 산적들을 규합하여 정의로운 도적단 조직</div>
          </div>
          <div>
            <div class="text-xs bg-blue-900 text-white rounded-full px-2 py-0.5 inline-block mb-1">1600 ~ 1605</div>
            <div class="font-semibold text-gray-900 dark:text-white">의적단원</div>
            <div class="text-xs text-gray-500 dark:text-gray-300">백성의 곡식을 도적질해 가난한 이웃에게 나눔</div>
          </div>
        </div>
      </div>
      <!-- Education -->
      <div>
        <div class="text-gray-900 dark:text-white text-lg font-bold mb-4">Education</div>
        <div class="space-y-6">
          <div>
            <div class="font-semibold text-gray-900 dark:text-white">성균관 유학</div>
            <div class="text-xs text-gray-500 dark:text-gray-300">조선 최고의 교육기관에서 유학 수학</div>
          </div>
          <div>
            <div class="font-semibold text-gray-900 dark:text-white">향교 졸업</div>
            <div class="text-xs text-gray-500 dark:text-gray-300">지방 교육기관인 향교에서 기초 학문 습득</div>
          </div>
          <div>
            <div class="font-semibold text-gray-900 dark:text-white">서당 수학</div>
            <div class="text-xs text-gray-500 dark:text-gray-300">어린 시절 서당에서 한학과 글공부</div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contacts Section -->
    <div id="contact" class="mt-16 mb-10">
      <div class="text-gray-900 dark:text-white text-xl font-bold mb-4">Contact</div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Contact Form -->
        <form class="bg-gray-100 dark:bg-gray-800 rounded-xl p-6 flex flex-col space-y-4" action="send_mail.php" method="POST">
          <label class="text-gray-900 dark:text-white font-semibold">제목
            <input type="text" name="subject" class="mt-1 w-full rounded border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-white p-2" placeholder="제목을 입력하세요" required>
          </label>
          <label class="text-gray-900 dark:text-white font-semibold">이메일
            <input type="email" name="email" class="mt-1 w-full rounded border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-white p-2" placeholder="your@email.com" required>
          </label>
          <label class="text-gray-900 dark:text-white font-semibold">내용
            <textarea name="message" class="mt-1 w-full rounded border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-white p-2" rows="4" placeholder="문의 내용을 입력하세요" required></textarea>
          </label>
          <button type="submit" class="bg-blue-600 text-white rounded px-4 py-2 font-bold hover:bg-blue-700">보내기</button>
        </form>
        <!-- Google Map & Address -->
        <div class="bg-gray-100 dark:bg-gray-800 rounded-xl p-6 flex flex-col items-center justify-center">
          <iframe class="w-full h-48 rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.920964049976!2d126.9783883153107!3d37.5665359797987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2e5c6b6b6b7%3A0x7b7b7b7b7b7b7b7b!2z7ISc7Jq47Yq567OE7IucIOyEnOyauO2KuOuzuOq1rA!5e0!3m2!1sko!2skr!4v1680000000000!5m2!1sko!2skr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="text-gray-900 dark:text-white text-center text-sm font-semibold">조선 한양, 활빈당 본부</div>
        </div>
      </div>
    </div>
  </div>
  <!-- 다크/라이트 모드 전환 버튼 -->
  <button id="toggleDark" class="fixed bottom-8 right-8 bg-white dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-full shadow-lg p-3 transition-colors duration-300">
    <!-- 해/달 아이콘 SVG -->
    <span id="icon-sun" class="block dark:hidden">
      <!-- Sun Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="2" fill="currentColor"/>
        <path stroke="currentColor" stroke-width="2" d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/>
      </svg>
    </span>
    <span id="icon-moon" class="hidden dark:block">
      <!-- Moon Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke="currentColor" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z"/>
      </svg>
    </span>
  </button>
  <script>
    // 다크모드 토글
    const btn = document.getElementById('toggleDark');
    btn.addEventListener('click', () => {
      document.documentElement.classList.toggle('dark');
    });
  </script>
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
  <?php if(isset($_GET['success'])): ?>
  <script>
    alert('메일이 성공적으로 전송되었습니다.');
    if (window.history.replaceState) {
      const url = window.location.origin + window.location.pathname;
      window.history.replaceState({}, document.title, url);
    }
  </script>
  <?php elseif(isset($_GET['error'])): ?>
  <script>
    alert('메일 전송에 실패했습니다. 다시 시도해 주세요.');
    if (window.history.replaceState) {
      const url = window.location.origin + window.location.pathname;
      window.history.replaceState({}, document.title, url);
    }
  </script>
  <?php endif; ?>
</body>
</html>