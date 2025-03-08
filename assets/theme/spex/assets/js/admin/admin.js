// This Functionality below is Under Construction! //

const newProject = document.querySelector("#js-new-project");

function buildDiv(...selector) {
  const el = document.createElement("div");
  el.classList.add(...selector);
  return el;
}

newProject.addEventListener("click", () => {
  // Used as placeholders for demo adding of cards
  const fakeProjects = {
    "s": [
      "Sintex",
      "26/47"
    ],
    "t": [
      "Tetrion",
      "7/21"
    ],
    "p": [
      "Petron",
      "14/16"
    ]
  }
  
  // Quick function to generate a random number based on passed in array
  const randomIndex = array => Math.floor(Math.random() * array.length);
  
  // Grab array of keys from the fakeProject object literal
  fakeProjectKeys = Object.keys(fakeProjects);
  
  // Grab a random project
  randomProject = randomIndex(fakeProjectKeys);
  
  // Grab the key from the random project
  const projectIcon = fakeProjectKeys[randomProject];
  
  // Grab first array value from the random key
  const projectTitle = fakeProjects[projectIcon][0];
  
  // Grab second array value from the random key
  const projectLabel = fakeProjects[projectIcon][1];
  
  // <div class='project-card'>
  const projectCard = buildDiv("project-card");
  // <div class='project-card__top'>
  const projectCardTop = buildDiv("project-card__top");
  // <div class='project-card__icon'>
  const projectCardIcon = buildDiv("project-card__icon", `project-card__icon--${projectIcon}`);
    projectCardIcon.textContent = projectIcon;
  // <div class='project-card__title'>Title Of Project</div>
  const projectCardTitle = buildDiv("project-card__title");
    projectCardTitle.textContent = projectTitle;
  // <div class='project-card__bottom'>
  const projectCardBottom = buildDiv("project-card__bottom");
  // <div class='progress-display'>
  const progressDisplay = buildDiv("progress-display");
  // <div class='progress-display__bar'>
  const progressDisplayBar = buildDiv("progress-display__bar");
  // <div class='bar-inner>
  const barInner = buildDiv("bar-inner", `bar-inner--${randomProject + 1}`);
  // <span class='progress-display__label'>Label Letter</span>
  const progressDisplayLabel = buildDiv("progress-display__label");
    progressDisplayLabel.textContent = projectLabel.toString();

  projectCardTop.append(projectCardIcon, projectCardTitle);
  progressDisplayBar.append(barInner);
  progressDisplay.append(progressDisplayBar, progressDisplayLabel);
  projectCardBottom.append(progressDisplay);
  
  projectCard.append(projectCardTop, projectCardBottom);
  newProject.parentNode.insertBefore(projectCard, newProject);
  
  const projectWrapGroup = document.querySelectorAll(".project-card-wrap > div");
  if(projectWrapGroup.length >= 5) {
    document.querySelector(".project-card-wrap").style.borderBottom = "2px solid rgba(0,0,0,0.3)";
  }
});