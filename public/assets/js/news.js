const data = [
    {
        id: '1',
        title: 'Title',
        url: 'https://cdn.pixabay.com/photo/2016/10/07/13/36/tangerines-1721590_960_720.jpg',
        description: 'Orange, a vibrant citrus fruit renowned for its juicy sweetness and refreshing tang, offers a burst of vitamin C and antioxidants. With its sunny hue and versatile flavor, it enhances both sweet and savory dishes, invigorating the senses with its zesty aroma and lively taste profile.'
    },
    {
        id: '2',
        title: 'Title',
        url: 'https://cdn.pixabay.com/photo/2017/09/26/13/42/apple-2788662_1280.jpg',
        description: 'Apple, a crisp and succulent fruit, comes in a variety of colors and flavors, ranging from sweet to tart. Packed with fiber, vitamins, and antioxidants, it promotes good health and aids digestion. Whether enjoyed fresh, baked into pies, or pressed into juice, apples delight taste buds with their crunchy texture and natural sweetness.'
    },
    {
        id: '3',
        title: 'Title',
        url: 'https://cdn.pixabay.com/photo/2017/03/10/15/15/lime-2133091_960_720.jpg',
        description: 'Lemon, a citrus fruit with a bright yellow hue, is renowned for its tangy flavor and refreshing aroma.Bursting with vitamin C and antioxidants, it offers numerous health benefits.Whether squeezed over dishes to enhance flavor or used in beverages and desserts, lemon adds a zesty and invigorating touch to culinary creations.'
    },
    {
        id: '4',
        title: 'Title',
        url: 'https://cdn.pixabay.com/photo/2018/01/17/22/24/strawberries-3089148_960_720.jpg',
        description: 'Lichi, a tropical fruit with a rough, reddish-brown exterior, encases a sweet, translucent flesh within. Bursting with floral notes and a hint of tartness, lichi delights the palate with its juicy texture. Rich in vitamin C and antioxidants, it offers a refreshing and exotic taste experience, perfect for indulging in desserts or enjoying fresh.'
    },

];

const title = document.getElementById('title');
const description = document.getElementById('description');
const blogImg = document.getElementById('blogImg');
const buttonNext = document.getElementById('buttonNext');
const buttonPrev = document.getElementById('buttonPrev');
const buttonNexts = document.querySelector('.buttonNexts');

const dataUpload = (currentDataIndex) => {
    title.textContent = data[currentDataIndex].title;
    description.textContent = data[currentDataIndex].description;
    blogImg.src = data[currentDataIndex].url;
}


buttonNexts.addEventListener('click', () => {
    console.log('first');
    let currentDataIndex = 0;
    currentDataIndex++;
    dataUpload(currentDataIndex);
});

