# Use an official PHP image
FROM php:8.2-cli

# Install dependencies for PHP built-in server
RUN apt-get update && apt-get install -y unzip

# Copy your application files to the container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Expose port 10000 (required by Render)
EXPOSE 10000

# Start PHP's built-in server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
