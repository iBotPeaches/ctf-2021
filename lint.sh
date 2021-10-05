#!/bin/bash

for FOLDER in ctfd/*
do
  if test -d "$FOLDER"
  then
    ctf challenge lint "$FOLDER";
  fi
done;