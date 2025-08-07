FROM node:20-alpine

# Set the working directory in the container
WORKDIR /app

# 1. Copy package.json and package-lock.json from the project root
# These will be copied to /app/package.json
COPY src/package*.json ./


# 2. Copy the Vite, PostCSS, and Tailwind config files
# from project_root/src/ into the WORKDIR /app/
COPY src/vite.config.js ./
COPY src/postcss.config.js ./
COPY src/tailwind.config.js ./

# 3. Install npm dependencies. This uses /app/package.json.
# The config files are now in /app if needed by any postinstall scripts.
RUN npm install 

# 4. Copy all contents of your project_root/src/ directory (which includes
# your JS/TS source files, the 'resources' directory, and also the config files again)
# into the WORKDIR /app/.
# - project_root/src/js/app.js  -> /app/js/app.js
# - project_root/src/resources/ -> /app/resources/
# - project_root/src/vite.config.js -> /app/vite.config.js (overwrites the one from step 2, which is fine)
COPY src/ ./
COPY src/public/ ./ 
COPY src/resources/ ./

# 5. Run the build command.
# This command will be executed in /app, where package.json, vite.config.js,
# and all your source files (e.g., /app/js/main.js, /app/resources/css/app.css) are now located.
RUN npm run build
CMD ["npm", "run", "serve"] 
