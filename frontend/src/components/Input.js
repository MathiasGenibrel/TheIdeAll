import React from "react";

import "./Input.css";
import EmailIcon from "../assets/icons/Email.svg.js";
import PasswdIcon from "../assets/icons/Password.svg.js";

const Input = (props) => {
  const icon =
    props.icon === "email"
      ? EmailIcon
      : props.icon === "password"
      ? PasswdIcon
      : null;

      console.log(icon)
  return (
    <label htmlFor={`inputForm${props.type}`} className="Input">
      <p>{props.title}</p>
      <article>
        <input
          id={`inputForm${props.type}`}
          type={props.type}
          placeholder={props.placeholder}
        />
        {icon()}
      </article>
    </label>
  );
};

export default Input;
