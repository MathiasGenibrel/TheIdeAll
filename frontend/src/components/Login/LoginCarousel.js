import React from "react";

const displayCarousel = (carousel) =>
  carousel.map((content) => {
    return (
      <div key={content.id}>
        <img src={content.urlImage} alt="" />
        <h1>{content.title}</h1>
        <p>{content.text}</p>
      </div>
    );
  });

const LoginCarousel = () => {
  const carouselContent = [
    {
      id: 1,
      urlImage: "url",
      title: "Des Activités Physiques Disponibles",
      text: "Des événements physiques disponibles, mis à jour régulièrement et ajout de nouvelles activités.",
    },
    {
      id: 2,
      urlImage: "url",
      title: "Une Accessibilité Hors Du Commun",
      text: "Un Dashboard Intelligeant où tout est accessible dès la première page.",
    },
    {
      id: 3,
      urlImage: "url",
      title: "Des Activités Virtuelles Innovantes",
      text: "Des activités virtuelles qui dépassent la troisième dimension !",
    },
  ];

  return (
    <article>
      <div>{displayCarousel(carouselContent)}</div>
      <div>
        <button className="slider 1"></button>
        <button className="slider 2"></button>
        <button className="slider 3"></button>
      </div>
    </article>
  );
};

export default LoginCarousel;
