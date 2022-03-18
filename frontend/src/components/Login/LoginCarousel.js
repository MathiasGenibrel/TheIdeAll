import React, { useEffect, useState } from "react";

import "./LoginCarousel.css";
import PhysicalActivity from "../../assets/Carousel/PhysicalActivity.webp";
import VirtualActivity from "../../assets/Carousel/VirtualActivity.webp";
import EasyAccess from "../../assets/Carousel/EasyAccess.webp";

const carouselContent = [
  {
    id: 1,
    selected: true,
    urlImage: PhysicalActivity,
    title: "Des Activités Physiques Disponibles",
    text: "Des événements physiques disponibles, mis à jour régulièrement et ajout de nouvelles activités.",
  },
  {
    id: 2,
    selected: false,
    urlImage: VirtualActivity,
    title: "Une Accessibilité Hors Du Commun",
    text: "Un Dashboard Intelligeant où tout est accessible dès la première page.",
  },
  {
    id: 3,
    selected: false,
    urlImage: EasyAccess,
    title: "Des Activités Virtuelles Innovantes",
    text: "Des activités virtuelles qui dépassent la troisième dimension !",
  },
];

const displayCarousel = (carousel) => {
  return carousel.map((content) => {
    return (
      <div key={content.id}>
        <article>
          <img src={content.urlImage} alt="" />
          <h1>{content.title}</h1>
          <p>{content.text}</p>
        </article>
      </div>
    );
  });
};

const displayButtonSlider = (carousel, clickHandler) => {
  return carousel.map((content) => {
    if (content.selected)
      return (
        <div
          onClick={() => clickHandler(content.id)}
          key={content.id}
          className="slider sliderSelected"
        ></div>
      );
    return (
      <div
        onClick={() => clickHandler(content.id)}
        key={content.id}
        className="slider"
      ></div>
    );
  });
};

const LoginCarousel = () => {
  const [carousel, setCarousel] = useState(carouselContent);
  const [carouselTimeout, setCarouselTimeout] = useState(true);
  const [positionSlider, setPositionSlider] = useState(0);

  const clickHandler = (id) => {
    setCarouselTimeout(false);
    setPositionSlider((id - 1) * 100);

    carousel.forEach((content) => {
      content.selected = false;
    });
    const sliderSelected = carousel.find((content) => content.id === id);
    sliderSelected.selected = true;

    const carouselLessSelectedSlide = carousel.filter(
      (content) => content.id !== sliderSelected.id
    );

    const nextCarousel = [sliderSelected, ...carouselLessSelectedSlide];
    nextCarousel.sort((a, b) => a.id - b.id);

    setCarousel(nextCarousel);
  };

  useEffect(() => {
    const timer = setTimeout(() => {
      const [idSelected] = carousel.filter((content) => content.selected);
      carousel.forEach((content) => (content.selected = false));

      let id = idSelected.id;
      if (id === carousel.length) id = 0;

      const nextSlide = carousel.find((content) => content.id === id + 1);
      nextSlide.selected = true;

      const carouselLessNextSlide = carousel.filter(
        (content) => content.id !== nextSlide.id
      );

      const nextCarousel = [nextSlide, ...carouselLessNextSlide];
      nextCarousel.sort((a, b) => a.id - b.id);

      setCarousel(nextCarousel);

      if (id < carousel.length) setPositionSlider(id * 100);
    }, 5e3);

    return () => {
      setCarouselTimeout(true);
      clearTimeout(timer);
    };
  }, [carousel, carouselTimeout]);

  return (
    <article className="loginCarousel">
      <article style={{ right: `${positionSlider}%` }} className="carousel">
        {displayCarousel(carousel)}
      </article>
      <div>{displayButtonSlider(carousel, clickHandler)}</div>
    </article>
  );
};

export default LoginCarousel;
