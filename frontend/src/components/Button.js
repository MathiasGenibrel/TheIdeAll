import React from "react";
import { useNavigate } from "react-router-dom";

import "./Button.css";

export const Button = (props) => {
  const navigate = useNavigate();

  const clickHandler = (event) => {
    event.preventDefault();
    if (props.link) return navigate(`/${props.link}`, { replace: true });
  };

  return (
    <button onClick={clickHandler} className="CTA">
      {props.action}
    </button>
  );
};
