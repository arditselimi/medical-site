const profileTitle = document.querySelector(
  ".testimonials__container--content-info__title"
);
const profileName = document.querySelector(
  ".testimonials__container--content-info__name"
);
const profileRole = document.querySelector(
  ".testimonials__container--content-info__role"
);
const testimonialProfiles = document.querySelectorAll(
  ".testimonials__container--content--profiles-profile"
);

function updateProfileInfo(data) {
  profileTitle.textContent = data.title;
  profileName.textContent = data.name;
  profileRole.textContent = data.role;
}

testimonialProfiles.forEach((item) => {
  item.addEventListener("click", (e) => {
    const profilesData = {
      thomas: {
        title:
          "Extremely pleased with the treatments received here. The team communicated clearly and effectively at every step.",
        name: "Thomas Jenkins",
        role: "Engineer",
      },
      emily: {
        title:
          "Always a professional and welcoming service. They helped me overcome my fear of dentistry. Thank you!",
        name: "Emily K.",
        role: "Teacher",
      },
      sarah: {
        title:
          "The teeth whitening procedure was highly effective, and I'm thrilled with the results. Thank you for the expertise and care provided here!",
        name: "Sarah L.",
        role: "Business Analyst",
      },
      john: {
        title:
          "I got an immediate appointment during an emergency, and my issue was resolved swiftly. I appreciate the professionalism here.",
        name: "John Doe",
        role: "Sales Manager",
      },
    };

    // Remove "active" class from all elements
    testimonialProfiles.forEach((profile) => {
      profile.classList.remove("active");
    });

    const profileId = e.target.id;
    if (profilesData.hasOwnProperty(profileId)) {
      updateProfileInfo(profilesData[profileId]);
      item.classList.add("active");
    }
  });
});

const toggles = document.querySelectorAll(".faq__container--content-toggle");

toggles.forEach((toggle) => {
  toggle.addEventListener("click", () => {
    toggle.parentNode.classList.toggle("active");
  });
});

const serviceBtns = document.querySelectorAll(
  ".hero-services__container--info-btns a"
);

serviceBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    const serviceData = {
      dental: {
        title: "Dental Implant Care",
        color: "#CBE2CA",
        number: "01",
        url: theme_data.base_url + "/assets/images/prosthodonti.webp",
      },
      aesthetic: {
        title: "Aesthetic Care",
        color: "#DAE4F0",
        number: "02",
        url: theme_data.base_url + "/assets/images/aesthetic.webp",
      },
      endodonti: {
        title: "Endodonti ",
        color: "#EDEADF",
        number: "03",
        url: theme_data.base_url + "/assets/images/endodonti.webp",
      },
      prosthodonti: {
        title: "Prosthodonti",
        color: "#D2DFF7",
        number: "04",
        url: theme_data.base_url + "/assets/images/prosthodonti.webp",
      },
    };

    let currentActive = e.target;

    // Remove "active" class from all elements
    serviceBtns.forEach((btn) => {
      btn.classList.remove("active");
    });

    const serviceId = e.target.id;
    if (serviceData.hasOwnProperty(serviceId)) {
      updateServiceInfo(serviceData[serviceId]);
      currentActive.classList.add("active");
    }
  });
});

const serviceNumber = document.querySelector(
  ".hero-services__container--info-details span"
);

const serviceTitle = document.querySelector(
  ".hero-services__container--info-details div h3"
);

const serviceBg = document.querySelector(".hero-services__container");
const serviceImg = document.querySelector(".hero-services__container--img img");

function updateServiceInfo(data) {
  serviceNumber.textContent = data.number;
  serviceTitle.textContent = data.title;
  serviceBg.style.backgroundColor = data.color;
  serviceImg.src = data.url;
}

const panels = document.querySelectorAll(".panel");
const ratingDesc = document.querySelector(".about-testimonials--content h3");
const ratingName = document.querySelector(".about-testimonials--content p");
const ratingJob = document.querySelector(".about-testimonials--content span");

panels.forEach((panel) => {
  panel.addEventListener("click", () => {
    removeActiveClasses();
    panel.classList.add("active");

    testimonialRating(panel.id);
  });
});

function removeActiveClasses() {
  panels.forEach((panel) => {
    panel.classList.remove("active");
  });
}

function testimonialRating(ratingId) {
  if (ratingId == "ratingEmily") {
    ratingDesc.textContent =
      "Complex procedure went perfectly. Dr. Martinez is an expert, caring support staff, excellent follow-up care. Outstanding service!";
    ratingName.textContent = "Emily Johnson";
    ratingJob.textContent = "No Code Expert";
  } else if (ratingId == "ratingMicha") {
    ratingDesc.textContent =
      "Unmatched professionalism. Welcoming from the start. Thorough job by the dental hygienist, and clear treatment options";
    ratingName.textContent = "Micha Davis";
    ratingJob.textContent = "Athlete";
  } else if (ratingId === "ratingJohn") {
    ratingDesc.textContent =
      "Attention to detail and patient comfort is exceptional. High-tech clinic, skilled and caring staff. Grateful for the positive experience.";
    ratingName.textContent = "John Doe";
    ratingJob.textContent = "Artist";
  } else if (ratingId == "ratingMike") {
    ratingDesc.textContent =
      "Fantastic clinic! Friendly staff, clean facilities, and excellent service. Dr. Smith was knowledgeable and made me comfortable. Highly recommend!";
    ratingName.textContent = "Mike Baker";
    ratingJob.textContent = "Founder of CEO";
  } else {
    ratingDesc.textContent =
      "Personalized care, warm atmosphere. Staff goes above and beyond. Dr. Brown addressed my concerns. Extremely satisfied with the care.";
    ratingName.textContent = "Linda Wilson";
    ratingJob.textContent = "UI Designer";
  }
}
