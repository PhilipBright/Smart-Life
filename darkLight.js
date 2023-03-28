
  
  const storageKey = 'theme-preference';

  const onClick = () => {

    theme.value = theme.value === 'light' ? 'dark' : 'light';
    setPreference();
  };

  const getColorPreference = () => {
    return localStorage.getItem(storageKey) || 'light'; // default to light mode
  };

  const setPreference = () => {
    localStorage.setItem(storageKey, theme.value);
    reflectPreference();
  };

  const reflectPreference = () => {
    document.firstElementChild.setAttribute('data-theme', theme.value);
    document.querySelector('#theme-toggle')?.setAttribute('aria-label', `Toggle ${theme.value === 'light' ? 'Dark' : 'Light'} Mode`);
  };

  const theme = {
    value: getColorPreference(),
  };

  // set early so no page flashes / CSS is made aware
  reflectPreference();

  window.onload = () => {
    // set on load so screen readers can see latest value on the button
    reflectPreference();

    // now this script can find and listen for clicks on the control
    document.querySelector('#theme-toggle').addEventListener('click', onClick);
  };


 


  const sunIcon = document.querySelector(".sun");
  const moonIcon = document.querySelector('.moon');

  const userTheme = localStorage.getItem("theme-toggle");
  const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

  const iconToggle = () => {
    moonIcon.classList.toggle("display-none");
    sunIcon.classList.toggle("display-none");
  }
  const themeCheck=() => {
    if (userTheme === "dark" || (!userTheme && systemTheme)){
      document.documentElement.classList.add("dark");
      moonIcon.classList.add("display-none");
      return;
    }
    sunIcon.classList.add("display-none");
  } 

  const themeSwitch = () => {
    if (document.documentElement.classList.contains("dark")){
      document.documentElement.classList.remove("dark");
      localStorage.setItem("theme-toggle" , "light");
      iconToggle();
      return;
    }
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme-toggle" , "dark");
    iconToggle();

  }
  sunIcon.addEventListener("click", () => {
    themeSwitch();
  });
  moonIcon.addEventListener("click", () => {
    themeSwitch();
  });

  themeCheck();




