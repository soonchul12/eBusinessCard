<!DOCTYPE html>
<html lang="ko" class="dark">
<head>
  <meta charset="UTF-8">
  <title>온라인 명함</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = { darkMode: 'class' }
  </script>
</head>
<body class="bg-blue-100 dark:bg-blue-800 min-h-screen flex flex-col items-center justify-center transition-colors duration-300">
  <div class="bg-white dark:bg-gray-900 rounded-3xl shadow-xl p-10 max-w-4xl w-full transition-colors duration-300">
    <!-- 상단 로고/이름 -->
    <div class="flex justify-between items-center mb-8">
      <div class="flex items-center space-x-2">
        <span class="bg-blue-200 w-6 h-6 inline-block rounded-full"></span>
        <span class="text-gray-900 dark:text-white font-semibold text-lg">Hong Gildong</span>
      </div>
      <div class="space-x-6 text-gray-500 dark:text-gray-400 text-sm">
        <a href="#" class="hover:text-blue-700 dark:hover:text-white">Kakao Talk</a>
        <a href="#" class="hover:text-blue-700 dark:hover:text-white">활빈당</a>
      </div>
    </div>
    <!-- 프로필/이름/직함 -->
    <div class="flex items-center space-x-10">
      <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="프로필" class="w-48 h-48 rounded-full border-8 border-gray-200 dark:border-gray-800 shadow-lg">
      <div>
        <div class="text-blue-600 dark:text-blue-400 font-bold text-xl mb-1">의적</div>
        <div class="text-gray-900 dark:text-white font-extrabold text-4xl mb-2">Hong Gildong</div>
        <div class="text-gray-700 dark:text-gray-200 text-lg mb-2">홍길동 · 洪吉童</div>
        <div class="text-gray-400 text-xs mb-4">조선에 거주</div>
        <div class="flex space-x-3 mt-2">
          <a href="#" class="bg-yellow-400 rounded-full p-2"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/kakaotalk.svg" class="w-5 h-5"></a>
          <a href="#" class="bg-blue-600 rounded-full p-2"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linkedin.svg" class="w-5 h-5"></a>
          <a href="#" class="bg-blue-500 rounded-full p-2"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" class="w-5 h-5"></a>
          <a href="#" class="bg-pink-500 rounded-full p-2"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" class="w-5 h-5"></a>
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
</body>
</html>
