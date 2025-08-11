# Gadgistics — E-commerce Website for Gadgets

**Short description**  
Gadgistics is a responsive e-commerce web application for buying and selling electronic gadgets (smartphones, laptops, smartwatches, accessories, etc.). The project includes both a customer-facing store and an admin panel for managing products, orders, and inquiries. :contentReference[oaicite:0]{index=0}

---

## Table of Contents
- [Project Overview](#project-overview)  
- [Features](#features)  
  - [User Features](#user-features)  
  - [Admin Features](#admin-features)  
- [Non-Functional Requirements](#non-functional-requirements)  
- [System Architecture & Data](#system-architecture--data)  
- [Tools & Technologies](#tools--technologies)  
- [Screenshots (key pages)](#screenshots-key-pages)  
- [How to Use (basic flows)](#how-to-use-basic-flows)  
- [Author & Course Info](#author--course-info)

---

## Project Overview
Gadgistics aims to provide a simple, user-friendly online store for gadget shoppers and a straightforward admin interface for website owners to manage products and orders. The site supports product browsing, searching, cart management, user authentication, and order placement. The admin panel supports product CRUD (create, read, update, delete), order review, and handling customer messages. :contentReference[oaicite:1]{index=1}

---

## Features

### User Features
- **Product Catalog:** View product listings with images and details. :contentReference[oaicite:2]{index=2}  
- **Search & Filter:** Find products by name, category, or other filters. :contentReference[oaicite:3]{index=3}  
- **Add to Cart:** Add items to a shopping cart, view cart contents, update quantities. :contentReference[oaicite:4]{index=4}  
- **Checkout / Order Placement:** Place orders for items in the cart and view confirmation. :contentReference[oaicite:5]{index=5}  
- **Login / Registration:** Create an account or log in to access order history and personal data. :contentReference[oaicite:6]{index=6}  
- **Contact Form:** Submit inquiries or feedback through a contact-us form. :contentReference[oaicite:7]{index=7}

### Admin Features
- **Admin Authentication:** Secure admin login to access management features. :contentReference[oaicite:8]{index=8}  
- **Product Management:** Add new products, upload images, update product details, and delete products. :contentReference[oaicite:9]{index=9}  
- **Order Management:** View and manage customer orders and confirmations. :contentReference[oaicite:10]{index=10}  
- **Customer Queries:** View messages submitted via the contact form. :contentReference[oaicite:11]{index=11}

---

## Non-Functional Requirements
- **Performance:** Pages should load quickly and handle multiple users without noticeable delay. :contentReference[oaicite:12]{index=12}  
- **Usability:** The interface is intuitive and easy to navigate on both desktop and mobile. :contentReference[oaicite:13]{index=13}  
- **Scalability:** The design allows adding new products and categories without major changes. :contentReference[oaicite:14]{index=14}  
- **Security:** User credentials are stored securely; common web vulnerabilities are considered (e.g., input validation and protection against SQL injection). :contentReference[oaicite:15]{index=15}  
- **Responsiveness:** The UI adapts to different screen sizes using responsive front-end components. :contentReference[oaicite:16]{index=16}  
- **Error Handling:** The system provides meaningful error messages for invalid operations (e.g., failed login, empty form fields). :contentReference[oaicite:17]{index=17}

---

## System Architecture & Data
- **Frontend:** Built with HTML5, CSS3, Bootstrap for responsive layouts, and JavaScript for client-side interactions (cart behavior, form validation). :contentReference[oaicite:18]{index=18}  
- **Backend:** PHP handles server-side logic including authentication, product/order processing, and form handling. :contentReference[oaicite:19]{index=19}  
- **Database:** MySQL stores users, products, orders, and contact messages. The documentation includes an ER diagram showing entities (Users, Products, Orders, etc.) and relationships. :contentReference[oaicite:20]{index=20}

---

## Tools & Technologies
- **Frontend:** HTML5, CSS3, Bootstrap, JavaScript. :contentReference[oaicite:21]{index=21}  
- **Backend / Database:** PHP, MySQL. :contentReference[oaicite:22]{index=22}  
- **Development environment:** XAMPP or similar local PHP/MySQL server (used during development). :contentReference[oaicite:23]{index=23}

---

## Screenshots (key pages)
The documentation includes screenshots for the following pages and features:
- Home Page (store front)  
- Store / Product Listing Page  
- Cart Page  
- Contact Us Form  
- Admin Panel  
- Order Confirmation / About Page  
(Refer to the repository `screenshots` or `images` area for the actual images.) :contentReference[oaicite:24]{index=24}

---

## How to Use (basic flows)
- **Browse & Buy:** Visit the Store page → browse or search products → add desired items to cart → proceed to checkout to place an order. :contentReference[oaicite:25]{index=25}  
- **Account Actions:** Register or log in to view past orders and manage personal details. :contentReference[oaicite:26]{index=26}  
- **Admin Management:** Admins log in to the admin panel to add/update/delete products, review orders, and read customer messages. :contentReference[oaicite:27]{index=27}

---

## Author & Course Info
- **Author:** M. Mursal Bajwa

---
