## CafeOurs

Welcome to **CafeOurs**, your cozy corner on the web where coffee lovers unite! This project is a simple website designed for a café, providing visitors with an easy way to explore our menu and learn about our café.

### Features

- **Home Page**: A brief introduction to our café.
- **Menu**: Basic descriptions of our beverages and snacks.
- **Customer Login**: A login system for customers to access their accounts.

### Technologies Used

- **Laravel**: PHP framework for building the web application.
- **Bootstrap**: For responsive and mobile-friendly design.
- **Laragon**: For a streamlined local development environment.

### Installation

1. **Clone the repository**: 
   ```bash
   git clone https://github.com/arumkusuma/laravel.git
   ```
2. **Navigate to the project directory**: 
   ```bash
   cd laravel
   ```
3. **Set up Laragon**:
   - Download and install Laragon from [here](https://laragon.org/download/).
   - Start Laragon and ensure that Laragon services are running.

4. **Set up the project in Laragon**:
   - Place the `CafeOurs` directory inside Laragon's `www` directory.
   - Open Laragon and navigate to `Menu > www > laravel`.

5. **Install the dependencies**:
   ```bash
   composer install
   npm install
   npm run dev
   ```
6. **Set up the environment variables** by copying `.env.example` to `.env` and updating the necessary configurations:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
7. **Run the database migrations**:
   ```bash
   php artisan migrate
   ```
8. **Start the development server**:
   ```bash
   php artisan serve
   ```
9. **Open your browser** and visit `http://localhost:8000` to view the website locally.

### Contribution

We welcome contributions! If you have ideas to improve our website, please fork the repository and submit a pull request. For major changes, please open an issue first to discuss what you would like to change.

## Team

1. Arum Kusuma Islam Jaya (leader)
2. Farros Abhista 
3. Isna Nadya Alifah 
4. Naufal Itmam Labibi 
5. Rifqi Alifian Hartono 


### Contact

If you have any questions or suggestions, feel free to reach out via email at [arum.kusuma.i.j@gmail.com].
