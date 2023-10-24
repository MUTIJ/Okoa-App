const modeToggle = document.getElementById('modeToggle');


modeToggle.addEventListener('change', () => {
    if (modeToggle.checked) {
        // Enable dark mode
        body.classList.add('dark-mode');
    } else {
        // Disable dark mode
        body.classList.remove('dark-mode');
    }
});

// Check the user's preference and set the initial mode accordingly
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    modeToggle.checked = true;
    body.classList.add('dark-mode');
}
<script>
  function switchToEnglish() {
    document.getElementById('english-content').style.display = 'block'}
    document.getElementById('swahili-content').style.display = 'none';
  

  function switchToSwahili() {
    document.getElementById('english-content').style.display = 'none'
    }
    document.getElementById('swahili-content').style.display = 'block';
  
</script>
function addNotification(message) {
    const notificationList = document.getElementById("notification-list");
    const li = document.createElement("li");
    li.textContent = message;
    notificationList.appendChild(li);
}

document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("floating-button");
    const menu = document.getElementById("menu-dropdown");
  
    button.addEventListener("click", function () {
      menu.style.display = menu.style.display === "none" ? "block" : "none";
    });
  
    // Add event listeners for menu items
    const themeButton = document.getElementById("theme-button");
    const textSizeButton = document.getElementById("text-size-button");
    const textSpaceButton = document.getElementById("text-space-button");
  
    themeButton.addEventListener("click", function () {
      // Change theme (modify website background, text color, etc.)
       document.body.style.backgroundColor = "black";
    });
  
    textSizeButton.addEventListener("click", function () {
      // Adjust text size (modify the font-size property for text elements)
      document.body.style.fontSize = "20px";
    });
  
    textSpaceButton.addEventListener("click", function () {
      // Increase text spacing (modify the line-height property for text elements)
      document.body.style.lineHeight = "1.5";
    });
  });


