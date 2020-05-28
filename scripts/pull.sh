#!/bin/bash

pids=()
commands=(
  "docker pull golang:alpine"
  "docker pull php:fpm-alpine"
  "docker pull python:alpine"
)

for ((i = 0; i < ${#commands[@]}; i++)); do
  ${commands[$i]} &
done

wait
