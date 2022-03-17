import React, { useState } from "react";

import "./Input.css";
import EmailIcon from "../assets/icons/Email.svg.js";
import PasswdIcon from "../assets/icons/Password.svg.js";

const Input = (props) => {
  const [value, setValue] = useState("");

  const valueChangeHandler = (event) => {
    console.log(event.target.value)
    setValue(event.target.value);
  };

  const icon =
    props.icon === "email"
      ? EmailIcon
      : props.icon === "password"
      ? PasswdIcon
      : null;

  return (
    <label htmlFor={`inputForm${props.type}`} className="Input">
      <p>{props.title}</p>
      <article>
        <input
          onChange={valueChangeHandler}
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
