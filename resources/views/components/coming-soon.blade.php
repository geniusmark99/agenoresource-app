<div class="h-screen w-full flex items-center justify-center bg-gray-50 dark:bg-gray-900">
    <div
      class="absolute animate-[cbounce_4s_ease-in-out_infinite] z-10 w-full h-[50%] flex flex-col justify-end items-center bg-gray-50 dark:bg-gray-900">
      <h1
        class="sm:text-9xl text-7xl font-extrabold font-mono bg-gradient-to-r from-green-500 via-indigo-400 to-indigo-600 inline-block text-transparent bg-clip-text">
        Coming</h1>
    </div>
    <div class="absolute w-full h-[50%] flex flex-col items-center justify-end bg-gray-50 dark:bg-gray-900">
      <h1
        class="sm:text-7xl text-6xl text-center font-mono font-extrabold bg-gradient-to-r from-green-500 via-indigo-400 to-indigo-600 inline-block text-transparent bg-clip-text">
        Soon</h1>
      <div id="countdown" class="flex items-center justify-center text-gray-500 dark:text-white text-2xl font-extrabold">
        <span id="days" class="px-2"></span>
        <span id="hours" class="px-2"></span>
        <span id="minutes" class="px-2"></span>
        <span id="seconds" class="px-2"></span>
      </div>
    </div>
  
  </div>
  <script>
    // Set the date we're counting down to (adjust the date and time)
    const countDownDate = new Date("Sep 30, 2024 00:00:00").getTime();
  
    // Update the countdown every 1 second
    const x = setInterval(function () {
      // Get the current date and time
      const now = new Date().getTime();
  
      // Calculate the time remaining
      const distance = countDownDate - now;
  
      // Calculate days, hours, minutes, and seconds
      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
      // Display the countdown in the HTML
      document.getElementById("days").innerHTML = days + " D";
      document.getElementById("hours").innerHTML = hours + " H"
      document.getElementById("minutes").innerHTML = minutes + " M";
      document.getElementById("seconds").innerHTML = seconds + " S";
  
      // If the countdown is over, display a message
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>