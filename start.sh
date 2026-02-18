#!/bin/bash

#Variavel de ambiente de pasta root
ROOT_DIR="$(cd "$(dirname "$0")" && pwd)"


# Abrindo o projeto front-end
echo "Opening front-end folder..."
cd "$ROOT_DIR/frontend/src" || exit
php -S localhost:1234 &
FRONTEND_PID=$!

# Abrindo o projeto back-end
echo "Opening backend folder..."
cd "$ROOT_DIR/backend" || exit
npm run dev &
BACKEND_PID=$!

echo "rodando projecto backend (PID: $BACKEND_PID)"
echo "front-end running on (PID: $FRONTEND_PID)"
echo "Press Ctrl+C to stop both servers"

trap "kill $BACKEND_PID $FRONTE_
