<template>
<div>
    <!-- Drawer (Responsive)-->
    <drawer></drawer>
    <!-- NavBar -->
    <nav class="d-none myNavbar d-lg-flex flex-column justify-content-center shadow-lg"> 
        <!-- Navbar Icons-->
       <div class="myNavbar__icons w-100">
           <div class="container d-flex align-items-baseline justify-content-between pt-3">
                <!-- Navbar Left Icons-->
                <div class="myNavbar__icons__left d-flex flex-row justify-content-between">
                    <div v-for="leftIcon in navIconsLeft" :key="leftIcon.id" class="pr-5">
                        <a :href="leftIcon.href"><img :src="leftIcon.source" :width="leftIcon.width" :height="leftIcon.height" /></a>
                    </div>                               
                </div>  
                <!-- Navbar Right Icons -->
                <div class="myNavbar__icons__right d-flex flex-row justify-content-between">
                    <div v-for="rightIcon in navIconsRight" :key="rightIcon.id" class="pl-5">
                        <a :href="rightIcon.href"><img :src="rightIcon.source" :width="rightIcon.width" :height="rightIcon.width" /></a>
                    </div>                 
                </div>         
           </div>
       </div>
       <div class="d-flex w-100 justify-content-center">
           <ul class="myNavbar__items container flex-wrap 
            justify-content-between text-center d-inline-flex align-items-center mt-4"
            >
                <li v-for="leftItem in navItemsLeft" :key="leftItem.id" 
                    class="myNavbar__items__item list-unstyled">
                    <a :href="leftItem.href">{{ leftItem.name }}</a>
                </li>
                <!-- Branding-->
                <li class="list-unstyled">
                    <h2 class="myNavbar__items__brand"><a href="#">The Brand</a></h2>
                </li>
                <li v-for="rightItem in navItemsRight" :key="rightItem.id" 
                    class="list-unstyled myNavbar__items__item">
                    <a :href="rightItem.href">{{ rightItem.name }}</a>
                </li>
        </ul>
       </div>   
        <div class="d-flex w-100 justify-content-center myNavbar__breadcrumb">
            <div class="container d-flex">
                <span class="myNavbar__breadcrumb__item">{{ watch.breadcrumb }}</span>
                <span style="color: white; padding: 10px 10px 10px 0px">Piaget Altiplano Ultimate 910P</span>
            </div>
        </div>        
    </nav>
     <!-- NavBar Mobile (Responsive) -->
    <nav class="myNavbar d-flex flex-column justify-content-center d-lg-none p-2"> 
       <div class="d-flex w-100">
            <h2 class="myNavbar__items__brand"><a href="">The Brand</a></h2>
       </div>   
        <div class="d-flex w-100 justify-content-center myNavbar__breadcrumb">
            <div class="container d-flex">
                <!-- hidden mobile -->
                <span class="myNavbar__breadcrumb__item d-none d-sm-block">{{ watch.breadcrumb }}</span>
                <!-- shown mobile -->
                <span style="color: white; padding: 10px 10px 10px 0px">Piaget Altiplano Ultimate 910P</span>
            </div>
        </div>        
    </nav>
</div>
</template>

<script>
import Drawer from './Drawer.vue';

export default {
  components: { Drawer },
   data: () => {
       return {
        // Navigations-Elemente + Logo
        navItemsLeft: 
            [
                {
                    id: 1,
                    name: "Watches",
                    href: "#",
                    logo: false,
                },
                    {
                    id: 2,
                    name: "Jewellery",
                    href: "#",
                    logo: false,
                },
                    {
                    id: 3,
                    name: "Wedding",
                    href: "#",
                    logo: false,
                },                               
        ],

        navItemsRight: 
        [
           
                {
                    id: 5,
                    name: "Academy",
                    href: "#",
                    logo: false,
                },
                    {
                    id: 6,
                    name: "Company",
                    href: "#",
                    logo: false,
                },
                    {
                    id: 7,
                    name: "Stores",
                    href: "#",
                    logo: false,
                },
        ],

        navIconsLeft: 
        [
            {
                id: 1,
                source: "/design/icons/Contact.png",
                width: "17",
                height: "15",
                href: "#"
            },
            {
                id: 2,
                source: "/design/icons/Stores.png",
                width: "15",
                height: "15",
                href: "#"
            },
            {
                id: 3,
                source: "/design/icons/Language.png",
                width: "15",
                height: "15",
                href: "#"
            },
        ],

        navIconsRight: [
            {
                id: 4,
                source: "/design/icons/Bag.png",
                width: "15",
                height: "15",
                href: "#"
            },
            {
                id: 5,
                source: "/design/icons/Wishlist.png",
                width: "15",
                height: "15",
                href: "#"
            },
            {
                id: 6,
                source: "/design/icons/Login.png",
                width: "15",
                height: "15",
                href: "#"
            },
            {
                id: 7,
                source: "/design/icons/Search.png",
                width: "15",
                height: "15",
                href: "#"
            }
        ],
        
       
        watch: {
            breadcrumb: "Home / Watches / Men's Watches / Piaget / ",
            
           }
       }
   }
}
</script>

