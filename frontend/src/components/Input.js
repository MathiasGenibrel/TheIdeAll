import React from "react";

import "./Input.css"

const Input = (props) => {
  return (
    <label htmlFor={`inputForm${props.title}`} className="Input" >
      <p>{props.title}</p>
      <input
        id={`inputForm${props.title}`}
        type={props.type}
        placeholder={props.placeholder}
      />
      {props.icon}
    </label>
  );
};

export default Input;
