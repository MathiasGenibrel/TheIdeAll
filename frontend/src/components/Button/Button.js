import React from "react";

export const Button = ({ callback }) => {
  const buttonHandler = () => {
    callback();
  };
  return <div>Button</div>;
};
