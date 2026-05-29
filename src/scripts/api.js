const apiKey = import.meta.env.VITE_API_KEY;

// const dataTest =[
//     {
//         "kind": "books#volume",
//         "id": "fjgH0QEACAAJ",
//         "etag": "Yr0pqNJxKxA",
//         "selfLink": "https://www.googleapis.com/books/v1/volumes/fjgH0QEACAAJ",
//         "volumeInfo": {
//             "title": "Untitled Becky Chambers 6",
//             "authors": [
//                 "Becky Chambers"
//             ],
//             "publishedDate": "2030-04-02",
//             "industryIdentifiers": [
//                 {
//                     "type": "ISBN_10",
//                     "identifier": "1529340543"
//                 },
//                 {
//                     "type": "ISBN_13",
//                     "identifier": "9781529340549"
//                 }
//             ],
//             "readingModes": {
//                 "text": false,
//                 "image": false
//             },
//             "pageCount": 0,
//             "printType": "BOOK",
//             "categories": [
//                 "Fiction"
//             ],
//             "maturityRating": "NOT_MATURE",
//             "allowAnonLogging": false,
//             "contentVersion": "preview-1.0.0",
//             "panelizationSummary": {
//                 "containsEpubBubbles": false,
//                 "containsImageBubbles": false
//             },
//             "language": "en",
//             "previewLink": "http://books.google.fr/books?id=fjgH0QEACAAJ&dq=inauthor:becky+chambers&hl=&cd=1&source=gbs_api",
//             "infoLink": "http://books.google.fr/books?id=fjgH0QEACAAJ&dq=inauthor:becky+chambers&hl=&source=gbs_api",
//             "canonicalVolumeLink": "https://books.google.com/books/about/Untitled_Becky_Chambers_6.html?hl=&id=fjgH0QEACAAJ"
//         },
//         "saleInfo": {
//             "country": "FR",
//             "saleability": "NOT_FOR_SALE",
//             "isEbook": false
//         },
//         "accessInfo": {
//             "country": "FR",
//             "viewability": "NO_PAGES",
//             "embeddable": false,
//             "publicDomain": false,
//             "textToSpeechPermission": "ALLOWED",
//             "epub": {
//                 "isAvailable": false
//             },
//             "pdf": {
//                 "isAvailable": false
//             },
//             "webReaderLink": "http://play.google.com/books/reader?id=fjgH0QEACAAJ&hl=&source=gbs_api",
//             "accessViewStatus": "NONE",
//             "quoteSharingAllowed": false
//         }
//     },
//     {
//         "kind": "books#volume",
//         "id": "Kxuf0QEACAAJ",
//         "etag": "HGLQn1WwpCY",
//         "selfLink": "https://www.googleapis.com/books/v1/volumes/Kxuf0QEACAAJ",
//         "volumeInfo": {
//             "title": "New Becky Chambers 1",
//             "authors": [
//                 "Becky Chambers"
//             ],
//             "publishedDate": "2026-06-02",
//             "industryIdentifiers": [
//                 {
//                     "type": "ISBN_10",
//                     "identifier": "1529340578"
//                 },
//                 {
//                     "type": "ISBN_13",
//                     "identifier": "9781529340570"
//                 }
//             ],
//             "readingModes": {
//                 "text": false,
//                 "image": false
//             },
//             "pageCount": 0,
//             "printType": "BOOK",
//             "categories": [
//                 "Fiction"
//             ],
//             "maturityRating": "NOT_MATURE",
//             "allowAnonLogging": false,
//             "contentVersion": "preview-1.0.0",
//             "panelizationSummary": {
//                 "containsEpubBubbles": false,
//                 "containsImageBubbles": false
//             },
//             "language": "en",
//             "previewLink": "http://books.google.fr/books?id=Kxuf0QEACAAJ&dq=inauthor:becky+chambers&hl=&cd=2&source=gbs_api",
//             "infoLink": "http://books.google.fr/books?id=Kxuf0QEACAAJ&dq=inauthor:becky+chambers&hl=&source=gbs_api",
//             "canonicalVolumeLink": "https://books.google.com/books/about/New_Becky_Chambers_1.html?hl=&id=Kxuf0QEACAAJ"
//         },
//         "saleInfo": {
//             "country": "FR",
//             "saleability": "NOT_FOR_SALE",
//             "isEbook": false
//         },
//         "accessInfo": {
//             "country": "FR",
//             "viewability": "NO_PAGES",
//             "embeddable": false,
//             "publicDomain": false,
//             "textToSpeechPermission": "ALLOWED",
//             "epub": {
//                 "isAvailable": false
//             },
//             "pdf": {
//                 "isAvailable": false
//             },
//             "webReaderLink": "http://play.google.com/books/reader?id=Kxuf0QEACAAJ&hl=&source=gbs_api",
//             "accessViewStatus": "NONE",
//             "quoteSharingAllowed": false
//         }
//     },
//     {
//         "kind": "books#volume",
//         "id": "XVbADgAAQBAJ",
//         "etag": "Bhq3RT+EYqc",
//         "selfLink": "https://www.googleapis.com/books/v1/volumes/XVbADgAAQBAJ",
//         "volumeInfo": {
//             "title": "Libration",
//             "subtitle": "Les Voyageurs, T2",
//             "authors": [
//                 "Becky Chambers"
//             ],
//             "publisher": "L'Atalante",
//             "publishedDate": "2023-08-31",
//             "description": "Deuxième volume des « Voyageurs », série lauréate du prestigieux prix Hugo, Libration confirme Becky Chambers à l’avant-garde d’un renouveau de la science-fiction, intimiste et pleine d’espoir. Lovelace, intelligence artificielle née à bord du Voyageur à la fin de L’Espace d’un an, accepte de se transférer à bord d’un corps synthétique.",
//             "industryIdentifiers": [
//                 {
//                     "type": "ISBN_13",
//                     "identifier": "9782367934679"
//                 },
//                 {
//                     "type": "ISBN_10",
//                     "identifier": "2367934673"
//                 }
//             ],
//             "readingModes": {
//                 "text": true,
//                 "image": true
//             },
//             "pageCount": 369,
//             "printType": "BOOK",
//             "categories": [
//                 "Fiction"
//             ],
//             "maturityRating": "NOT_MATURE",
//             "allowAnonLogging": true,
//             "contentVersion": "1.11.11.0.preview.3",
//             "panelizationSummary": {
//                 "containsEpubBubbles": false,
//                 "containsImageBubbles": false
//             },
//             "imageLinks": {
//                 "smallThumbnail": "http://books.google.com/books/content?id=XVbADgAAQBAJ&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api",
//                 "thumbnail": "http://books.google.com/books/content?id=XVbADgAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api"
//             },
//             "language": "fr",
//             "previewLink": "http://books.google.fr/books?id=XVbADgAAQBAJ&printsec=frontcover&dq=inauthor:becky+chambers&hl=&cd=3&source=gbs_api",
//             "infoLink": "https://play.google.com/store/books/details?id=XVbADgAAQBAJ&source=gbs_api",
//             "canonicalVolumeLink": "https://play.google.com/store/books/details?id=XVbADgAAQBAJ"
//         },
//         "saleInfo": {
//             "country": "FR",
//             "saleability": "FOR_SALE",
//             "isEbook": true,
//             "listPrice": {
//                 "amount": 6.99,
//                 "currencyCode": "EUR"
//             },
//             "retailPrice": {
//                 "amount": 6.99,
//                 "currencyCode": "EUR"
//             },
//             "buyLink": "https://play.google.com/store/books/details?id=XVbADgAAQBAJ&rdid=book-XVbADgAAQBAJ&rdot=1&source=gbs_api",
//             "offers": [
//                 {
//                     "finskyOfferType": 1,
//                     "listPrice": {
//                         "amountInMicros": 6990000,
//                         "currencyCode": "EUR"
//                     },
//                     "retailPrice": {
//                         "amountInMicros": 6990000,
//                         "currencyCode": "EUR"
//                     },
//                     "giftable": true
//                 }
//             ]
//         },
//         "accessInfo": {
//             "country": "FR",
//             "viewability": "PARTIAL",
//             "embeddable": true,
//             "publicDomain": false,
//             "textToSpeechPermission": "ALLOWED",
//             "epub": {
//                 "isAvailable": true
//             },
//             "pdf": {
//                 "isAvailable": true
//             },
//             "webReaderLink": "http://play.google.com/books/reader?id=XVbADgAAQBAJ&hl=&source=gbs_api",
//             "accessViewStatus": "SAMPLE",
//             "quoteSharingAllowed": false
//         },
//         "searchInfo": {
//             "textSnippet": "Deuxième volume des « Voyageurs », série lauréate du prestigieux prix Hugo, Libration confirme Becky Chambers à l’avant-garde d’un renouveau de la science-fiction, intimiste et pleine d’espoir."
//         }
//     },
//     {
//         "kind": "books#volume",
//         "id": "5ZuhDAAAQBAJ",
//         "etag": "GT8qQCyXd8c",
//         "selfLink": "https://www.googleapis.com/books/v1/volumes/5ZuhDAAAQBAJ",
//         "volumeInfo": {
//             "title": "L'Espace d'un an",
//             "subtitle": "Les Voyageurs, T1",
//             "authors": [
//                 "Becky Chambers"
//             ],
//             "publisher": "L'Atalante",
//             "publishedDate": "2020-11-26",
//             "description": "Premier volume des « Voyageurs », série lauréate du prestigieux prix Hugo, L’Espace d’un an signe les débuts de Becky Chambers, dont la plume et les récits ont bouleversé la science-fiction. Rosemary, jeune humaine inexpérimentée, fuit sa famille de richissimes escrocs. Elle est engagée comme greffière à bord du Voyageur, ...",
//             "industryIdentifiers": [
//                 {
//                     "type": "ISBN_13",
//                     "identifier": "9782367934372"
//                 },
//                 {
//                     "type": "ISBN_10",
//                     "identifier": "2367934371"
//                 }
//             ],
//             "readingModes": {
//                 "text": true,
//                 "image": true
//             },
//             "pageCount": 421,
//             "printType": "BOOK",
//             "categories": [
//                 "Fiction"
//             ],
//             "maturityRating": "NOT_MATURE",
//             "allowAnonLogging": true,
//             "contentVersion": "1.25.24.0.preview.3",
//             "panelizationSummary": {
//                 "containsEpubBubbles": false,
//                 "containsImageBubbles": false
//             },
//             "imageLinks": {
//                 "smallThumbnail": "http://books.google.com/books/content?id=5ZuhDAAAQBAJ&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api",
//                 "thumbnail": "http://books.google.com/books/content?id=5ZuhDAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api"
//             },
//             "language": "fr",
//             "previewLink": "http://books.google.fr/books?id=5ZuhDAAAQBAJ&printsec=frontcover&dq=inauthor:becky+chambers&hl=&cd=4&source=gbs_api",
//             "infoLink": "https://play.google.com/store/books/details?id=5ZuhDAAAQBAJ&source=gbs_api",
//             "canonicalVolumeLink": "https://play.google.com/store/books/details?id=5ZuhDAAAQBAJ"
//         },
//         "saleInfo": {
//             "country": "FR",
//             "saleability": "FOR_SALE",
//             "isEbook": true,
//             "listPrice": {
//                 "amount": 6.99,
//                 "currencyCode": "EUR"
//             },
//             "retailPrice": {
//                 "amount": 6.99,
//                 "currencyCode": "EUR"
//             },
//             "buyLink": "https://play.google.com/store/books/details?id=5ZuhDAAAQBAJ&rdid=book-5ZuhDAAAQBAJ&rdot=1&source=gbs_api",
//             "offers": [
//                 {
//                     "finskyOfferType": 1,
//                     "listPrice": {
//                         "amountInMicros": 6990000,
//                         "currencyCode": "EUR"
//                     },
//                     "retailPrice": {
//                         "amountInMicros": 6990000,
//                         "currencyCode": "EUR"
//                     },
//                     "giftable": true
//                 }
//             ]
//         },
//         "accessInfo": {
//             "country": "FR",
//             "viewability": "PARTIAL",
//             "embeddable": true,
//             "publicDomain": false,
//             "textToSpeechPermission": "ALLOWED",
//             "epub": {
//                 "isAvailable": true
//             },
//             "pdf": {
//                 "isAvailable": true
//             },
//             "webReaderLink": "http://play.google.com/books/reader?id=5ZuhDAAAQBAJ&hl=&source=gbs_api",
//             "accessViewStatus": "SAMPLE",
//             "quoteSharingAllowed": false
//         },
//         "searchInfo": {
//             "textSnippet": "Premier volume des « Voyageurs », série lauréate du prestigieux prix Hugo, L’Espace d’un an signe les débuts de Becky Chambers, dont la plume et les récits ont bouleversé la science-fiction."
//         }
//     },
//     {
//         "kind": "books#volume",
//         "id": "kpGwDwAAQBAJ",
//         "etag": "IEVnFa1s0H8",
//         "selfLink": "https://www.googleapis.com/books/v1/volumes/kpGwDwAAQBAJ",
//         "volumeInfo": {
//             "title": "Archives de l'exode",
//             "subtitle": "Les Voyageurs, T3",
//             "authors": [
//                 "Becky Chambers"
//             ],
//             "publisher": "L'Atalante",
//             "publishedDate": "2024-07-18",
//             "description": "Troisième volume des « Voyageurs », série lauréate du prestigieux prix Hugo, Archives de l’exode confirme Becky Chambers à l’avant-garde d’un renouveau de la science-fiction, intimiste et pleine d’espoir. La Flotte d’exode est un trésor vieillissant, témoin de la volonté humaine de disséminer ses enfants et sa culture à travers les étoiles.",
//             "industryIdentifiers": [
//                 {
//                     "type": "ISBN_13",
//                     "identifier": "9782367935287"
//                 },
//                 {
//                     "type": "ISBN_10",
//                     "identifier": "2367935289"
//                 }
//             ],
//             "readingModes": {
//                 "text": true,
//                 "image": true
//             },
//             "pageCount": 351,
//             "printType": "BOOK",
//             "categories": [
//                 "Fiction"
//             ],
//             "maturityRating": "NOT_MATURE",
//             "allowAnonLogging": true,
//             "contentVersion": "1.18.14.0.preview.3",
//             "panelizationSummary": {
//                 "containsEpubBubbles": false,
//                 "containsImageBubbles": false
//             },
//             "imageLinks": {
//                 "smallThumbnail": "http://books.google.com/books/content?id=kpGwDwAAQBAJ&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api",
//                 "thumbnail": "http://books.google.com/books/content?id=kpGwDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api"
//             },
//             "language": "fr",
//             "previewLink": "http://books.google.fr/books?id=kpGwDwAAQBAJ&printsec=frontcover&dq=inauthor:becky+chambers&hl=&cd=5&source=gbs_api",
//             "infoLink": "https://play.google.com/store/books/details?id=kpGwDwAAQBAJ&source=gbs_api",
//             "canonicalVolumeLink": "https://play.google.com/store/books/details?id=kpGwDwAAQBAJ"
//         },
//         "saleInfo": {
//             "country": "FR",
//             "saleability": "FOR_SALE",
//             "isEbook": true,
//             "listPrice": {
//                 "amount": 6.99,
//                 "currencyCode": "EUR"
//             },
//             "retailPrice": {
//                 "amount": 6.99,
//                 "currencyCode": "EUR"
//             },
//             "buyLink": "https://play.google.com/store/books/details?id=kpGwDwAAQBAJ&rdid=book-kpGwDwAAQBAJ&rdot=1&source=gbs_api",
//             "offers": [
//                 {
//                     "finskyOfferType": 1,
//                     "listPrice": {
//                         "amountInMicros": 6990000,
//                         "currencyCode": "EUR"
//                     },
//                     "retailPrice": {
//                         "amountInMicros": 6990000,
//                         "currencyCode": "EUR"
//                     },
//                     "giftable": true
//                 }
//             ]
//         },
//         "accessInfo": {
//             "country": "FR",
//             "viewability": "PARTIAL",
//             "embeddable": true,
//             "publicDomain": false,
//             "textToSpeechPermission": "ALLOWED",
//             "epub": {
//                 "isAvailable": true
//             },
//             "pdf": {
//                 "isAvailable": true
//             },
//             "webReaderLink": "http://play.google.com/books/reader?id=kpGwDwAAQBAJ&hl=&source=gbs_api",
//             "accessViewStatus": "SAMPLE",
//             "quoteSharingAllowed": false
//         },
//         "searchInfo": {
//             "textSnippet": "Troisième volume des « Voyageurs », série lauréate du prestigieux prix Hugo, Archives de l’exode confirme Becky Chambers à l’avant-garde d’un renouveau de la science-fiction, intimiste et pleine d’espoir."
//         }
//     },
//     {
//         "kind": "books#volume",
//         "id": "yINY0QEACAAJ",
//         "etag": "qWI+jt9Oh5Q",
//         "selfLink": "https://www.googleapis.com/books/v1/volumes/yINY0QEACAAJ",
//         "volumeInfo": {
//             "title": "Tome 1, Un psaume pour les recyclés sauvages ; Tome 2, Une prière pour les cimes",
//             "subtitle": "timides",
//             "authors": [
//                 "Becky Chambers"
//             ],
//             "publishedDate": "2025-05-08",
//             "industryIdentifiers": [
//                 {
//                     "type": "ISBN_13",
//                     "identifier": "9791036002342"
//                 }
//             ],
//             "readingModes": {
//                 "text": false,
//                 "image": false
//             },
//             "pageCount": 0,
//             "printType": "BOOK",
//             "maturityRating": "NOT_MATURE",
//             "allowAnonLogging": false,
//             "contentVersion": "preview-1.0.0",
//             "panelizationSummary": {
//                 "containsEpubBubbles": false,
//                 "containsImageBubbles": false
//             },
//             "language": "fr",
//             "previewLink": "http://books.google.fr/books?id=yINY0QEACAAJ&dq=inauthor:becky+chambers&hl=&cd=6&source=gbs_api",
//             "infoLink": "http://books.google.fr/books?id=yINY0QEACAAJ&dq=inauthor:becky+chambers&hl=&source=gbs_api",
//             "canonicalVolumeLink": "https://books.google.com/books/about/Tome_1_Un_psaume_pour_les_recycl%C3%A9s_sauv.html?hl=&id=yINY0QEACAAJ"
//         },
//         "saleInfo": {
//             "country": "FR",
//             "saleability": "NOT_FOR_SALE",
//             "isEbook": false
//         },
//         "accessInfo": {
//             "country": "FR",
//             "viewability": "NO_PAGES",
//             "embeddable": false,
//             "publicDomain": false,
//             "textToSpeechPermission": "ALLOWED",
//             "epub": {
//                 "isAvailable": false
//             },
//             "pdf": {
//                 "isAvailable": false
//             },
//             "webReaderLink": "http://play.google.com/books/reader?id=yINY0QEACAAJ&hl=&source=gbs_api",
//             "accessViewStatus": "NONE",
//             "quoteSharingAllowed": false
//         },
//         "searchInfo": {
//             "textSnippet": "Dans ces romans qui ont conquis d&#39;emblée les coeurs et les esprits, Becky Chambers met en scène nos doutes au quotidien : dans un monde où les gens ne manquent de rien, à quoi sert d&#39;avoir toujours plus ?"
//         }
//     },
//     {
//         "kind": "books#volume",
//         "id": "6wmCEAAAQBAJ",
//         "etag": "uvTVDSTvzns",
//         "selfLink": "https://www.googleapis.com/books/v1/volumes/6wmCEAAAQBAJ",
//         "volumeInfo": {
//             "title": "Une prière pour les cimes timides",
//             "subtitle": "Histoires de moine et de robot, T2",
//             "authors": [
//                 "Becky Chambers"
//             ],
//             "publisher": "L'Atalante",
//             "publishedDate": "2023-03-09",
//             "description": "Omphale et Dex quittent la nature sauvage et arrivent sur les terres humaines.À chaque étape, le robot prend conscience que sa tâche sera bien plus compliquée qu’il ne le pensait.À sa question « de quoi avez-vous besoin ? », il y a tant de réponses, et souvent aucune.",
//             "industryIdentifiers": [
//                 {
//                     "type": "ISBN_13",
//                     "identifier": "9782367935942"
//                 },
//                 {
//                     "type": "ISBN_10",
//                     "identifier": "2367935947"
//                 }
//             ],
//             "readingModes": {
//                 "text": true,
//                 "image": true
//             },
//             "pageCount": 99,
//             "printType": "BOOK",
//             "categories": [
//                 "Fiction"
//             ],
//             "maturityRating": "NOT_MATURE",
//             "allowAnonLogging": true,
//             "contentVersion": "1.10.8.0.preview.3",
//             "panelizationSummary": {
//                 "containsEpubBubbles": false,
//                 "containsImageBubbles": false
//             },
//             "imageLinks": {
//                 "smallThumbnail": "http://books.google.com/books/content?id=6wmCEAAAQBAJ&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api",
//                 "thumbnail": "http://books.google.com/books/content?id=6wmCEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api"
//             },
//             "language": "fr",
//             "previewLink": "http://books.google.fr/books?id=6wmCEAAAQBAJ&printsec=frontcover&dq=inauthor:becky+chambers&hl=&cd=7&source=gbs_api",
//             "infoLink": "https://play.google.com/store/books/details?id=6wmCEAAAQBAJ&source=gbs_api",
//             "canonicalVolumeLink": "https://play.google.com/store/books/details?id=6wmCEAAAQBAJ"
//         },
//         "saleInfo": {
//             "country": "FR",
//             "saleability": "FOR_SALE",
//             "isEbook": true,
//             "listPrice": {
//                 "amount": 9.99,
//                 "currencyCode": "EUR"
//             },
//             "retailPrice": {
//                 "amount": 9.99,
//                 "currencyCode": "EUR"
//             },
//             "buyLink": "https://play.google.com/store/books/details?id=6wmCEAAAQBAJ&rdid=book-6wmCEAAAQBAJ&rdot=1&source=gbs_api",
//             "offers": [
//                 {
//                     "finskyOfferType": 1,
//                     "listPrice": {
//                         "amountInMicros": 9990000,
//                         "currencyCode": "EUR"
//                     },
//                     "retailPrice": {
//                         "amountInMicros": 9990000,
//                         "currencyCode": "EUR"
//                     },
//                     "giftable": true
//                 }
//             ]
//         },
//         "accessInfo": {
//             "country": "FR",
//             "viewability": "PARTIAL",
//             "embeddable": true,
//             "publicDomain": false,
//             "textToSpeechPermission": "ALLOWED",
//             "epub": {
//                 "isAvailable": true
//             },
//             "pdf": {
//                 "isAvailable": true
//             },
//             "webReaderLink": "http://play.google.com/books/reader?id=6wmCEAAAQBAJ&hl=&source=gbs_api",
//             "accessViewStatus": "SAMPLE",
//             "quoteSharingAllowed": false
//         },
//         "searchInfo": {
//             "textSnippet": "Omphale et Dex quittent la nature sauvage et arrivent sur les terres humaines.À chaque étape, le robot prend conscience que sa tâche sera bien plus compliquée qu’il ne le pensait.À sa question « de quoi avez-vous besoin ? », il y a ..."
//         }
//     },
//     {
//         "kind": "books#volume",
//         "id": "cbSu0AEACAAJ",
//         "etag": "aXlaFc2HYJo",
//         "selfLink": "https://www.googleapis.com/books/v1/volumes/cbSu0AEACAAJ",
//         "volumeInfo": {
//             "title": "Archives de l'Exode",
//             "authors": [
//                 "Becky Chambers"
//             ],
//             "publishedDate": "2024-04-10",
//             "industryIdentifiers": [
//                 {
//                     "type": "ISBN_10",
//                     "identifier": "2253937126"
//                 },
//                 {
//                     "type": "ISBN_13",
//                     "identifier": "9782253937128"
//                 }
//             ],
//             "readingModes": {
//                 "text": false,
//                 "image": false
//             },
//             "pageCount": 0,
//             "printType": "BOOK",
//             "maturityRating": "NOT_MATURE",
//             "allowAnonLogging": false,
//             "contentVersion": "preview-1.0.0",
//             "panelizationSummary": {
//                 "containsEpubBubbles": false,
//                 "containsImageBubbles": false
//             },
//             "language": "fr",
//             "previewLink": "http://books.google.fr/books?id=cbSu0AEACAAJ&dq=inauthor:becky+chambers&hl=&cd=8&source=gbs_api",
//             "infoLink": "http://books.google.fr/books?id=cbSu0AEACAAJ&dq=inauthor:becky+chambers&hl=&source=gbs_api",
//             "canonicalVolumeLink": "https://books.google.com/books/about/Archives_de_l_Exode.html?hl=&id=cbSu0AEACAAJ"
//         },
//         "saleInfo": {
//             "country": "FR",
//             "saleability": "NOT_FOR_SALE",
//             "isEbook": false
//         },
//         "accessInfo": {
//             "country": "FR",
//             "viewability": "NO_PAGES",
//             "embeddable": false,
//             "publicDomain": false,
//             "textToSpeechPermission": "ALLOWED",
//             "epub": {
//                 "isAvailable": false
//             },
//             "pdf": {
//                 "isAvailable": false
//             },
//             "webReaderLink": "http://play.google.com/books/reader?id=cbSu0AEACAAJ&hl=&source=gbs_api",
//             "accessViewStatus": "NONE",
//             "quoteSharingAllowed": false
//         },
//         "searchInfo": {
//             "textSnippet": "Mais un accident à bord amène à la prise de conscience que la Flotte n&#39;est peut-être pas éternelle. À travers le regard de plusieurs personnages - une ethnologue à tentacules, un homme qui rêve d&#39;intégrer la Flotte, un adolescent, ..."
//         }
//     },
//     {
//         "kind": "books#volume",
//         "id": "hTNavgAACAAJ",
//         "etag": "rE1oi43BIuk",
//         "selfLink": "https://www.googleapis.com/books/v1/volumes/hTNavgAACAAJ",
//         "volumeInfo": {
//             "title": "L'espace d'un an",
//             "authors": [
//                 "Becky Chambers"
//             ],
//             "publishedDate": "2016-08-25",
//             "description": "Rosemary, jeune humaine inexpérimentée, fuit sa famille de richissimes escrocs. Elle est engagée comme greffière à bord du Voyageur, un vaisseau qui creuse des tunnels dans l'espace, où elle apprend à vivre et à travailler avec des représentants de différentes espèces de la galaxie : des reptiles, des amphibiens et, plus étranges encore, d'autres humains. La pilote, couverte d'écailles et de plumes multicolores, a choisi de se couper de ses semblables. Le médecin et cuistot de bord occupe ses six mains à réconforter les gens pour oublier la tragédie qui a condamné son espèce à mort. Le capitaine humain, pacifiste, aime une alien engagée dans la guerre. L'IA du bord hésite à se transférer dans un corps de chair et de sang. Les tribulations du Voyageur, parti pour un trajet d'un an vers une planète lointaine, composent la tapisserie chaleureuse d'une famille unie par des liens plus fondamentaux que le sang ou les lois : l'amour sous toutes ses formes. Loin de nous offrir un space opera d'action et de batailles rangées, Becky Chambers signe un texte tout en humour et en tendresse subtile, et réussit le prodige de nous faire passer en permanence de l'expérience d'un exotisme avéré à la sensation d'une familiarité saisissante.",
//             "industryIdentifiers": [
//                 {
//                     "type": "ISBN_10",
//                     "identifier": "2841727661"
//                 },
//                 {
//                     "type": "ISBN_13",
//                     "identifier": "9782841727667"
//                 }
//             ],
//             "readingModes": {
//                 "text": false,
//                 "image": false
//             },
//             "pageCount": 448,
//             "printType": "BOOK",
//             "maturityRating": "NOT_MATURE",
//             "allowAnonLogging": false,
//             "contentVersion": "preview-1.0.0",
//             "panelizationSummary": {
//                 "containsEpubBubbles": false,
//                 "containsImageBubbles": false
//             },
//             "language": "fr",
//             "previewLink": "http://books.google.fr/books?id=hTNavgAACAAJ&dq=inauthor:becky+chambers&hl=&cd=9&source=gbs_api",
//             "infoLink": "http://books.google.fr/books?id=hTNavgAACAAJ&dq=inauthor:becky+chambers&hl=&source=gbs_api",
//             "canonicalVolumeLink": "https://books.google.com/books/about/L_espace_d_un_an.html?hl=&id=hTNavgAACAAJ"
//         },
//         "saleInfo": {
//             "country": "FR",
//             "saleability": "NOT_FOR_SALE",
//             "isEbook": false
//         },
//         "accessInfo": {
//             "country": "FR",
//             "viewability": "NO_PAGES",
//             "embeddable": false,
//             "publicDomain": false,
//             "textToSpeechPermission": "ALLOWED",
//             "epub": {
//                 "isAvailable": false
//             },
//             "pdf": {
//                 "isAvailable": false
//             },
//             "webReaderLink": "http://play.google.com/books/reader?id=hTNavgAACAAJ&hl=&source=gbs_api",
//             "accessViewStatus": "NONE",
//             "quoteSharingAllowed": false
//         },
//         "searchInfo": {
//             "textSnippet": "Loin de nous offrir un space opera d&#39;action et de batailles rangées, Becky Chambers signe un texte tout en humour et en tendresse subtile, et réussit le prodige de nous faire passer en permanence de l&#39;expérience d&#39;un exotisme avéré à ..."
//         }
//     },
//     {
//         "kind": "books#volume",
//         "id": "5qNnCwAAQBAJ",
//         "etag": "nnkSYwDNb0c",
//         "selfLink": "https://www.googleapis.com/books/v1/volumes/5qNnCwAAQBAJ",
//         "volumeInfo": {
//             "title": "A Closed and Common Orbit",
//             "subtitle": "Wayfarers 2",
//             "authors": [
//                 "Becky Chambers"
//             ],
//             "publisher": "Hachette UK",
//             "publishedDate": "2016-10-20",
//             "description": "'NEVER LESS THAN DEEPLY INVOLVING' DAILY MAIL 'SO MUCH FUN' HEAT 'WARM, ENGAGING' GUARDIAN A warm, comforting, big-hearted stand-alone set in the same world as the award-winning The Long way to Small Angry Planet. Lovelace was once merely a ship's artificial intelligence. When she wakes up in an new body, following a total system shut-down and reboot, she has to start over in a synthetic body, in a world where her kind are illegal. She's never felt so alone. But she's not alone, not really. Pepper, one of the engineers who risked life and limb to reinstall Lovelace, is determined to help her adjust to her new world. Because Pepper knows a thing or two about starting over. Together, Pepper and Lovey will discover that, huge as the galaxy may be, it's anything but empty. READERS LOVE BECKY CHAMBERS 'An emotional read' ⭐⭐⭐⭐⭐ 'Wonderful, humane SF' ⭐⭐⭐⭐⭐ 'It's a gentle and sweet read' ⭐⭐⭐⭐⭐ 'Chambers is truly a master of Character Driven fiction' ⭐⭐⭐⭐⭐ 'This world she has built is a vibrant, eclectic, multi-cultural joy to read about' ⭐⭐⭐⭐⭐",
//             "industryIdentifiers": [
//                 {
//                     "type": "ISBN_13",
//                     "identifier": "9781473621459"
//                 },
//                 {
//                     "type": "ISBN_10",
//                     "identifier": "1473621453"
//                 }
//             ],
//             "readingModes": {
//                 "text": true,
//                 "image": false
//             },
//             "pageCount": 353,
//             "printType": "BOOK",
//             "categories": [
//                 "Fiction"
//             ],
//             "maturityRating": "NOT_MATURE",
//             "allowAnonLogging": true,
//             "contentVersion": "1.11.12.0.preview.2",
//             "panelizationSummary": {
//                 "containsEpubBubbles": false,
//                 "containsImageBubbles": false
//             },
//             "imageLinks": {
//                 "smallThumbnail": "http://books.google.com/books/content?id=5qNnCwAAQBAJ&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api",
//                 "thumbnail": "http://books.google.com/books/content?id=5qNnCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api"
//             },
//             "language": "en",
//             "previewLink": "http://books.google.fr/books?id=5qNnCwAAQBAJ&printsec=frontcover&dq=inauthor:becky+chambers&hl=&cd=10&source=gbs_api",
//             "infoLink": "https://play.google.com/store/books/details?id=5qNnCwAAQBAJ&source=gbs_api",
//             "canonicalVolumeLink": "https://play.google.com/store/books/details?id=5qNnCwAAQBAJ"
//         },
//         "saleInfo": {
//             "country": "FR",
//             "saleability": "FOR_SALE",
//             "isEbook": true,
//             "listPrice": {
//                 "amount": 6.99,
//                 "currencyCode": "EUR"
//             },
//             "retailPrice": {
//                 "amount": 6.99,
//                 "currencyCode": "EUR"
//             },
//             "buyLink": "https://play.google.com/store/books/details?id=5qNnCwAAQBAJ&rdid=book-5qNnCwAAQBAJ&rdot=1&source=gbs_api",
//             "offers": [
//                 {
//                     "finskyOfferType": 1,
//                     "listPrice": {
//                         "amountInMicros": 6990000,
//                         "currencyCode": "EUR"
//                     },
//                     "retailPrice": {
//                         "amountInMicros": 6990000,
//                         "currencyCode": "EUR"
//                     },
//                     "giftable": true
//                 }
//             ]
//         },
//         "accessInfo": {
//             "country": "FR",
//             "viewability": "PARTIAL",
//             "embeddable": true,
//             "publicDomain": false,
//             "textToSpeechPermission": "ALLOWED",
//             "epub": {
//                 "isAvailable": true,
//                 "acsTokenLink": "http://books.google.fr/books/download/A_Closed_and_Common_Orbit-sample-epub.acsm?id=5qNnCwAAQBAJ&format=epub&output=acs4_fulfillment_token&dl_type=sample&source=gbs_api"
//             },
//             "pdf": {
//                 "isAvailable": false
//             },
//             "webReaderLink": "http://play.google.com/books/reader?id=5qNnCwAAQBAJ&hl=&source=gbs_api",
//             "accessViewStatus": "SAMPLE",
//             "quoteSharingAllowed": false
//         },
//         "searchInfo": {
//             "textSnippet": "READERS LOVE BECKY CHAMBERS &#39;An emotional read&#39; ⭐⭐⭐⭐⭐ &#39;Wonderful, humane SF&#39; ⭐⭐⭐⭐⭐ &#39;It&#39;s a gentle and sweet read&#39; ⭐⭐⭐⭐⭐ &#39;Chambers is truly a master of Character Driven fiction&#39; ⭐⭐⭐⭐⭐ &#39;This world she ..."
//         }
//     }
// ];

const aside = document.querySelector('aside');

async function searchBook() {
    // 1. On donne le chemin RELATIF vers le fichier JSON
    try{
    const url =`https://www.googleapis.com/books/v1/volumes?q=harry+potter&langRestrict=fr&maxResults=40&key=${apiKey}`;
    const dataApi = await fetch(url);
    console.log(dataApi);
        // 2. On convertit la réponse brute en tableau/objet JS
            if (!dataApi.ok) {
                throw new Error("Impossible de charger le fichier JSON");
            }
        const data = await dataApi.json();
        // 3. On utilise les données reçues
        console.log("Données locales reçues :", data);
        
        const dataFr = data.items.filter(book => book.volumeInfo.language === "fr");
        console.log(dataFr)
        // const dataBooks = dataFr.items;
        dataFr.forEach(book => {
        aside.append(createCardBook(book));
        });
        }
        catch(error) {
            console.error("Erreur lors de la lecture du JSON :", error);
        };
}


searchBook();

function createCardBook(book){
    const cardBook = document.createElement('article');
    cardBook.classList.add('cardBook');
    cardBook.innerHTML=`
        <a href="./src/pages/book.html?id=${book.id}"> <img src="${book.volumeInfo.imageLinks?book.volumeInfo.imageLinks.thumbnail:"/public/images/imgDefault.png"}" alt="${book.volumeInfo.title}"></a>
        <a href="./src/pages/book.html?id=${book.id}" class="titleCardBook"> ${book.volumeInfo.title}</a>
        <span>${book.volumeInfo.authors?.join(",")}</span>
        <span>${book.volumeInfo.categories?.join(",")}</span>
        <button class="addBtn" type="button"> Ajouter</button>
    `
    return cardBook;
}

