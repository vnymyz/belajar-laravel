## Notes Notes Belajar Laravel

### Tabel relationship

1 Penulis bisa menulis banyak penulisan (one to many).

dan 1 tulisan hanya bisa ditulis oleh 1 user atau penulis (one to one).

1 post hanya 1 kategori. (one to one)

1 kategori boleh banyak post. (one to many)

### Catetan Command line

```bash
      App\Models\Post {#5423
        title: "Ad similique perferendis consequatur commodi repudiandae vitae iste temporibus.",
        author: "Nyana Pangestu",
        slug: "ad-similique-perferendis-consequatur-commodi-repudiandae-vitae-iste-temporibus",
        body: "Quidem quos optio similique ut voluptatem. Similique magnam ducimus aut cum. Blanditiis harum odio
 architecto minima aliquid perspiciatis delectus. Omnis et consequatur omnis corporis ab.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 6,
      },
      App\Models\Post {#5424
        title: "Ex commodi occaecati possimus reprehenderit qui dicta.",
        author: "Luis Gandi Firgantoro",
        slug: "ex-commodi-occaecati-possimus-reprehenderit-qui-dicta",
        body: "Omnis eum culpa atque et eligendi et. Ipsam quasi quia sint voluptas ut. Commodi doloribus ducimus
 reprehenderit.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 7,
      },
      App\Models\Post {#5425
        title: "Est iste quis adipisci delectus numquam excepturi.",
        author: "Olivia Oktaviani",
        slug: "est-iste-quis-adipisci-delectus-numquam-excepturi",
        body: "Tenetur voluptatum sed perferendis architecto. Nihil et veniam dolorem aliquam dolorem cum. Omnis
et quo iusto ipsam aliquam voluptas laborum.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 8,
      },
      App\Models\Post {#5426
        title: "Rerum eligendi ipsa et consequatur alias.",
        author: "Tantri Hani Kusmawati",
        slug: "rerum-eligendi-ipsa-et-consequatur-alias",
        body: "Sit rerum sed tempora explicabo aut adipisci dolores laborum. Rerum ex dignissimos ad ab illo. Con
sequatur et sit maiores fugiat ut eveniet doloremque. Eum est quia ipsum et maiores ex est qui.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 9,
      },
      App\Models\Post {#5427
        title: "Et consequatur aut excepturi doloremque architecto harum natus eum.",
        author: "Intan Yance Widiastuti",
        slug: "et-consequatur-aut-excepturi-doloremque-architecto-harum-natus-eum",
        body: "Pariatur eveniet suscipit distinctio velit. Sequi voluptatem sit quia ipsum. Itaque autem est comm
odi. Voluptates aliquam corrupti maiores aut necessitatibus.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 10,
      },
      App\Models\Post {#5428
        title: "In molestiae illo possimus sunt veritatis aliquid magni.",
        author: "Vivi Astuti M.M.",
        slug: "in-molestiae-illo-possimus-sunt-veritatis-aliquid-magni",
        body: "Tempora debitis libero architecto molestiae aut id quia dolorum. Itaque quidem deserunt at et qui
velit necessitatibus. Quis adipisci iure architecto qui inventore qui. Quos quibusdam optio maxime.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 11,
      },
      App\Models\Post {#5429
        title: "Porro quidem reprehenderit nisi omnis ut non voluptatibus.",
        author: "Raisa Usamah",
        slug: "porro-quidem-reprehenderit-nisi-omnis-ut-non-voluptatibus",
        body: "Ducimus quo earum provident fugit. Rem et ullam commodi. Amet ipsa tenetur enim maiores.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 12,
      },
      App\Models\Post {#5430
        title: "Qui dolore distinctio quod maxime iusto voluptatum voluptate sit.",
        author: "Imam Situmorang",
        slug: "qui-dolore-distinctio-quod-maxime-iusto-voluptatum-voluptate-sit",
        body: "Et dolores dolor eum nostrum accusamus. Beatae explicabo ut libero ea expedita quia. Earum qui rep
ellat expedita eligendi omnis.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 13,
      },
      App\Models\Post {#5431
        title: "Molestiae id optio dicta tempore reiciendis perspiciatis aliquam dolore blanditiis.",
        author: "Vero Arta Prabowo S.Farm",
        slug: "molestiae-id-optio-dicta-tempore-reiciendis-perspiciatis-aliquam-dolore-blanditiis",
        body: "Quos sint inventore consequatur consequatur. Adipisci veritatis dicta labore amet. Enim quis dolor
es earum. Et voluptatum optio possimus ut.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 14,
      },
      App\Models\Post {#5432
        title: "Ut harum ut reprehenderit tempore suscipit molestias molestiae.",
        author: "Karen Mayasari S.Psi",
        slug: "ut-harum-ut-reprehenderit-tempore-suscipit-molestias-molestiae",
        body: "Voluptas iste architecto perspiciatis omnis accusantium hic nam. Natus quasi ut aut iusto. Dolores
 ipsum est tempora necessitatibus aliquam dolorum quis. Ut commodi officia nam animi aut vel officia.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 15,
      },
      App\Models\Post {#5433
        title: "Minima optio dolores iusto maiores eos rem excepturi.",
        author: "Eman Utama",
        slug: "minima-optio-dolores-iusto-maiores-eos-rem-excepturi",
        body: "Atque ipsum quia dolorum tempore vitae veniam mollitia. In rerum magnam impedit porro explicabo la
udantium. Totam sit amet aut sed. Est ipsam aut pariatur saepe tempore.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 16,
      },
      App\Models\Post {#5434
        title: "Assumenda iusto quia repellat quidem quo quas.",
        author: "Salimah Yance Hastuti S.Gz",
        slug: "assumenda-iusto-quia-repellat-quidem-quo-quas",
        body: "Sint aut odio aut sunt explicabo reprehenderit. Earum hic mollitia similique magnam earum numquam.
 Dolorem consequatur ad enim optio et iusto possimus eius.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 17,
      },
      App\Models\Post {#5435
        title: "Praesentium autem eos ut deserunt possimus quasi qui itaque.",
        author: "Iriana Maryati",
        slug: "praesentium-autem-eos-ut-deserunt-possimus-quasi-qui-itaque",
        body: "Sequi quas et deserunt repellat excepturi. Ex quo aut dolor omnis. Cupiditate animi explicabo ab t
otam. Magni maiores culpa inventore adipisci. Recusandae deleniti laudantium amet ducimus et est.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 18,
      },
      App\Models\Post {#5436
        title: "Adipisci maiores voluptatem voluptas non.",
        author: "Fathonah Fitriani Laksita",
        slug: "adipisci-maiores-voluptatem-voluptas-non",
        body: "Deleniti et cupiditate quasi necessitatibus officia. Minima ea sunt dolorum consequatur perferendi
s et architecto. Et adipisci eaque deserunt quo.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 19,
      },
      App\Models\Post {#5437
        title: "Maxime iste cumque modi voluptas corporis voluptates.",
        author: "Cemani Saragih",
        slug: "maxime-iste-cumque-modi-voluptas-corporis-voluptates",
        body: "Saepe ratione fugit excepturi officia asperiores. Vero enim aut quaerat debitis natus sed dignissi
mos. Fugit sit quasi rem excepturi placeat. Nulla perferendis dolor eos.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 20,
      },
      App\Models\Post {#5438
        title: "Ex consequatur et eius esse ut similique dolor.",
        author: "Uda Prabowo",
        slug: "ex-consequatur-et-eius-esse-ut-similique-dolor",
        body: "Consequatur aut ad nulla et. Nihil voluptas rem est incidunt qui totam.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 21,
      },
      App\Models\Post {#5439
        title: "Consequatur repellat est est ad consequatur harum ut.",
        author: "Laras Rahayu S.E.",
        slug: "consequatur-repellat-est-est-ad-consequatur-harum-ut",
        body: "Modi minus rerum vel qui eum ut. Rem voluptatum error deserunt sequi in possimus. Commodi accusamu
s cupiditate quibusdam. Quia esse ipsam eaque nostrum voluptatem.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 22,
      },
      App\Models\Post {#5440
        title: "Repellendus odio et earum asperiores maxime eum voluptate quo aliquam.",
        author: "Lala Purwanti",
        slug: "repellendus-odio-et-earum-asperiores-maxime-eum-voluptate-quo-aliquam",
        body: "At voluptatem repellat deleniti deleniti sint nihil non. Assumenda dolorem dolorum est quas odio i
n unde. Facilis et consequatur commodi a.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 23,
      },
      App\Models\Post {#5441
        title: "Distinctio dignissimos illum odit voluptas.",
        author: "Cahyanto Iswahyudi",
        slug: "distinctio-dignissimos-illum-odit-voluptas",
        body: "Officia consequatur aut et perspiciatis animi sapiente animi quos. Sit fugiat et aut architecto de
lectus. Fugiat impedit explicabo vero reprehenderit.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 24,
      },
      App\Models\Post {#5442
        title: "Beatae reiciendis quia magni est voluptatem.",
        author: "Titi Rahayu",
        slug: "beatae-reiciendis-quia-magni-est-voluptatem",
        body: "Quis laudantium labore corrupti similique necessitatibus. Unde ut est et et aliquam sint. Facere v
oluptatibus et consectetur qui maiores quis omnis ut.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 25,
      },
      App\Models\Post {#5443
        title: "Qui perferendis autem et ut ex.",
        author: "Rahmi Laksmiwati S.Gz",
        slug: "qui-perferendis-autem-et-ut-ex",
        body: "Repellat aspernatur ut architecto facilis sunt. Quia nulla vitae ut quae atque. Pariatur aut eaque
 aspernatur aut similique voluptates ad. Dicta accusantium quae sed aut suscipit.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 26,
      },
      App\Models\Post {#5444
        title: "Aspernatur sed quaerat aliquid atque qui itaque porro qui.",
        author: "Cakrabirawa Pangestu Ardianto S.I.Kom",
        slug: "aspernatur-sed-quaerat-aliquid-atque-qui-itaque-porro-qui",
        body: "A et enim consequatur ut et suscipit rerum. Eligendi eum nulla optio possimus at. Delectus nisi mo
lestiae nobis fugiat. Molestiae voluptas saepe sequi eius esse consequuntur.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 27,
      },
      App\Models\Post {#5445
        title: "Tenetur aperiam consequatur atque tempore ipsam officiis rerum placeat iste aliquid.",
        author: "Rika Oktaviani",
        slug: "tenetur-aperiam-consequatur-atque-tempore-ipsam-officiis-rerum-placeat-iste-aliquid",
        body: "Sed repellendus vel autem ipsam. Quo dolores fugit ea asperiores et voluptas. Veritatis harum nobi
s quasi quis possimus et.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 28,
      },
      App\Models\Post {#5446
        title: "Ipsa et eos laboriosam dolorem facere.",
        author: "Makara Dariati Sihotang",
        slug: "ipsa-et-eos-laboriosam-dolorem-facere",
        body: "Repellat officia sequi eum qui sunt. Autem vel labore dolore dolore. Ea enim minus facere voluptat
ibus quia.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 29,
      },
      App\Models\Post {#5447
        title: "Ea ab consequatur voluptatibus sequi non magnam.",
        author: "Darsirah Firmansyah",
        slug: "ea-ab-consequatur-voluptatibus-sequi-non-magnam",
        body: "Quia magnam id sed culpa corrupti. Excepturi et quia sit corrupti laboriosam repudiandae necessita
tibus. Voluptas maiores ducimus magnam libero. Fugiat et voluptas officiis adipisci sint qui amet.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 30,
      },
      App\Models\Post {#5448
        title: "Animi id nostrum tempora qui atque eveniet dolorum minus cupiditate aut.",
        author: "Diah Hafshah Halimah S.IP",
        slug: "animi-id-nostrum-tempora-qui-atque-eveniet-dolorum-minus-cupiditate-aut",
        body: "Et delectus aperiam eos rem. Dolor esse facere at voluptas facere repellat. Vel blanditiis et volu
ptates eveniet.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 31,
      },
      App\Models\Post {#5449
        title: "Numquam deserunt enim hic quasi quos.",
        author: "Nasab Banara Pradipta M.Farm",
        slug: "numquam-deserunt-enim-hic-quasi-quos",
        body: "Veniam qui facilis nobis autem. Fuga aut repellendus similique suscipit aliquam.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 32,
      },
      App\Models\Post {#5450
        title: "Quibusdam aut natus aperiam in omnis.",
        author: "Samsul Nainggolan",
        slug: "quibusdam-aut-natus-aperiam-in-omnis",
        body: "Dolorum nam impedit placeat amet. Eum ut enim voluptate magnam est sint dolorum. Magni rerum qui q
uibusdam dignissimos.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 33,
      },
      App\Models\Post {#5451
        title: "Quasi aliquid qui explicabo ipsa.",
        author: "Garang Natsir",
        slug: "quasi-aliquid-qui-explicabo-ipsa",
        body: "Modi qui eaque qui alias aut. Quia laudantium a officia consequuntur voluptatem. Et velit nihil et
 molestiae autem illo ut.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 34,
      },
      App\Models\Post {#5452
        title: "Accusamus et neque omnis error dolore quis eveniet asperiores.",
        author: "Dalima Kania Zulaika",
        slug: "accusamus-et-neque-omnis-error-dolore-quis-eveniet-asperiores",
        body: "Tempore et laboriosam qui dolores eveniet vero esse sit. Ea quae aliquid officiis facere alias sed
. Voluptatem sit molestias eum. Qui velit quod ut sequi.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 35,
      },
      App\Models\Post {#5453
        title: "Voluptatem odio atque dolore adipisci.",
        author: "Karna Prasasta",
        slug: "voluptatem-odio-atque-dolore-adipisci",
        body: "Unde qui adipisci commodi. Saepe aperiam magni dolorem eveniet. Consequatur omnis sed maiores aper
iam natus in.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 36,
      },
      App\Models\Post {#5454
        title: "Eos quos voluptate perferendis qui animi dicta.",
        author: "Wasis Marwata Suryono",
        slug: "eos-quos-voluptate-perferendis-qui-animi-dicta",
        body: "Suscipit quisquam in pariatur culpa dolorum. Illo placeat et explicabo est ut expedita mollitia. A
ccusamus repellendus vel earum ut ea.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 37,
      },
      App\Models\Post {#5455
        title: "Quis qui quibusdam dolores voluptas praesentium.",
        author: "Hari Halim S.Sos",
        slug: "quis-qui-quibusdam-dolores-voluptas-praesentium",
        body: "Quisquam sit reiciendis voluptate enim voluptatem dolore. Blanditiis eveniet rem dolorem reiciendi
s minus qui. Autem expedita quo amet et.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 38,
      },
      App\Models\Post {#5456
        title: "Aspernatur voluptates dolorum perspiciatis qui alias voluptates labore.",
        author: "Endra Zulkarnain",
        slug: "aspernatur-voluptates-dolorum-perspiciatis-qui-alias-voluptates-labore",
        body: "Sapiente quia qui officia accusantium. Quaerat fuga blanditiis enim. Sit sint et ut dignissimos ha
rum aspernatur tempore. Perspiciatis exercitationem veritatis et nisi magnam sunt quia.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 39,
      },
      App\Models\Post {#5457
        title: "Consequatur corrupti quo nihil omnis.",
        author: "Gadang Saragih S.T.",
        slug: "consequatur-corrupti-quo-nihil-omnis",
        body: "Dolore aut vero ea nam officia quis. Aut porro est in numquam quisquam explicabo in. Quaerat labor
iosam ea et non. Est laudantium officia sequi.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 40,
      },
      App\Models\Post {#5458
        title: "Consequuntur aut aperiam error molestiae.",
        author: "Rahayu Rachel Pratiwi M.Pd",
        slug: "consequuntur-aut-aperiam-error-molestiae",
        body: "Laudantium atque aut et sed. Est molestias incidunt officiis autem totam. Ratione necessitatibus e
a nisi architecto voluptatem.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 41,
      },
      App\Models\Post {#5459
        title: "In commodi magni sint fuga excepturi dolores.",
        author: "Dariati Baktiono Pratama",
        slug: "in-commodi-magni-sint-fuga-excepturi-dolores",
        body: "Ratione nobis eveniet magni fugiat commodi commodi. Cum quo autem optio ut. Quis iste quibusdam ut
 molestiae et fuga voluptatem.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 42,
      },
      App\Models\Post {#5460
        title: "Et pariatur sunt tempora recusandae eligendi autem vero odio.",
        author: "Betania Umi Mulyani S.E.I",
        slug: "et-pariatur-sunt-tempora-recusandae-eligendi-autem-vero-odio",
        body: "Magni possimus voluptatum doloribus quo sit. Dolor sed voluptatem itaque repudiandae. Perferendis
laboriosam saepe eligendi qui. Veritatis ut sed porro enim neque voluptate.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 43,
      },
      App\Models\Post {#5461
        title: "Voluptatibus dolorem delectus mollitia perspiciatis ullam.",
        author: "Kania Ellis Riyanti",
        slug: "voluptatibus-dolorem-delectus-mollitia-perspiciatis-ullam",
        body: "Et esse et repellendus officia eligendi. Eveniet aut ipsam eum quod praesentium excepturi. Ipsa au
tem voluptatem exercitationem soluta. Est sit non optio autem.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 44,
      },
      App\Models\Post {#5462
        title: "Mollitia quidem placeat a vel ut molestiae quam commodi.",
        author: "Yuliana Namaga S.T.",
        slug: "mollitia-quidem-placeat-a-vel-ut-molestiae-quam-commodi",
        body: "Suscipit optio aut aliquam molestiae nesciunt doloribus dolorum. Corrupti pariatur dolorem eaque d
olore mollitia voluptatibus. Amet est voluptatum ipsum in delectus enim qui quam.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 45,
      },
      App\Models\Post {#5463
        title: "Corrupti iste exercitationem quo molestiae nam ut animi.",
        author: "Cornelia Novi Rahayu S.I.Kom",
        slug: "corrupti-iste-exercitationem-quo-molestiae-nam-ut-animi",
        body: "Omnis architecto accusamus minus quis ut et alias. Iure voluptas voluptas accusantium sed. Ea quas
i suscipit repellendus sed. Qui doloremque consequatur et eaque facere omnis ex.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 46,
      },
      App\Models\Post {#5464
        title: "Itaque rem doloribus voluptates tempore officia officiis nisi et.",
        author: "Latika Padmasari",
        slug: "itaque-rem-doloribus-voluptates-tempore-officia-officiis-nisi-et",
        body: "Ut distinctio aut culpa ea laudantium sequi repellat. Hic sed velit cupiditate id quo porro.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 47,
      },
      App\Models\Post {#5465
        title: "Vero libero enim dolorem et dolores.",
        author: "Eka Novitasari",
        slug: "vero-libero-enim-dolorem-et-dolores",
        body: "Labore facere eveniet aut sed. Voluptas perferendis culpa quibusdam saepe nostrum cumque. Numquam
fugiat architecto amet sed iusto. Nihil expedita iure quia dolorem rerum laborum earum quidem.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 48,
      },
      App\Models\Post {#5466
        title: "Possimus id eligendi ab harum perspiciatis dolor.",
        author: "Kezia Nasyidah",
        slug: "possimus-id-eligendi-ab-harum-perspiciatis-dolor",
        body: "Aut et error hic exercitationem et dolores. Odit sequi nemo corrupti error. Maiores sed aperiam re
rum quo. Tenetur ut eveniet est nostrum molestiae. Consequatur nulla deserunt autem.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 49,
      },
      App\Models\Post {#5467
        title: "Nisi amet saepe illum delectus aut hic.",
        author: "Vanesa Hassanah",
        slug: "nisi-amet-saepe-illum-delectus-aut-hic",
        title: "Nisi amet saepe illum delectus aut hic.",
        author: "Vanesa Hassanah",
        slug: "nisi-amet-saepe-illum-delectus-aut-hic",
        body: "Ut dolor ut quibusdam reiciendis ratione maxime minima impedit. Itaque sit et voluptatem quisquam
quis nostrum. Ut voluptas hic temporibus inventore omnis.",
        author: "Vanesa Hassanah",
        slug: "nisi-amet-saepe-illum-delectus-aut-hic",
        body: "Ut dolor ut quibusdam reiciendis ratione maxime minima impedit. Itaque sit et voluptatem quisquam
quis nostrum. Ut voluptas hic temporibus inventore omnis.",
        slug: "nisi-amet-saepe-illum-delectus-aut-hic",
        body: "Ut dolor ut quibusdam reiciendis ratione maxime minima impedit. Itaque sit et voluptatem quisquam
quis nostrum. Ut voluptas hic temporibus inventore omnis.",
        body: "Ut dolor ut quibusdam reiciendis ratione maxime minima impedit. Itaque sit et voluptatem quisquam
quis nostrum. Ut voluptas hic temporibus inventore omnis.",
quis nostrum. Ut voluptas hic temporibus inventore omnis.",
        updated_at: "2025-08-03 13:26:43",
        created_at: "2025-08-03 13:26:43",
        id: 50,
      },
    ],
  }

> exit

   INFO  Goodbye.


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan migrate:fresh

  Dropping all tables ............................................................................ 13.98ms DONE

   INFO  Preparing database.

  Creating migration table ....................................................................... 15.31ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table ........................................................... 28.53ms DONE
  0001_01_01_000001_create_cache_table ........................................................... 11.67ms DONE
  0001_01_01_000002_create_jobs_table ............................................................ 22.58ms DONE
  2025_08_03_104550_create_posts_table ............................................................ 1.80ms FAIL

   Illuminate\Database\QueryException

  SQLSTATE[HY000]: General error: 1 unknown column "user_id" in foreign key definition (Connection: sqlite, SQL:
create table "posts" ("id" integer primary key autoincrement not null, "title" varchar not null, "slug" varchar n
ot null, "author_id" integer not null, "body" text not null, "created_at" datetime, "updated_at" datetime, foreig
n key("user_id") references "users"("id")))

  at vendor\laravel\framework\src\Illuminate\Database\Connection.php:824
    820▕                     $this->getName(), $query, $this->prepareBindings($bindings), $e
    821▕                 );
    822▕             }
    823▕
  ➜ 824▕             throw new QueryException(
    825▕                 $this->getName(), $query, $this->prepareBindings($bindings), $e
    826▕             );
    827▕         }
    828▕     }

  1   vendor\laravel\framework\src\Illuminate\Database\Connection.php:564
      PDOException::("SQLSTATE[HY000]: General error: 1 unknown column "user_id" in foreign key definition")

  2   vendor\laravel\framework\src\Illuminate\Database\Connection.php:564
      PDO::prepare("create table "posts" ("id" integer primary key autoincrement not null, "title" varchar not nu
ll, "slug" varchar not null, "author_id" integer not null, "body" text not null, "created_at" datetime, "updated_
at" datetime, foreign key("user_id") references "users"("id"))")


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan migrate:fresh

  Dropping all tables ............................................................................. 9.42ms DONE

   INFO  Preparing database.

  Creating migration table ........................................................................ 9.55ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table ........................................................... 35.56ms DONE
  0001_01_01_000001_create_cache_table ........................................................... 18.81ms DONE
  0001_01_01_000002_create_jobs_table ............................................................ 43.62ms DONE
  2025_08_03_104550_create_posts_table ............................................................ 5.89ms DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan tinker
Psy Shell v0.12.9 (PHP 8.3.16 — cli) by Justin Hileman
> App\Models\Post::factory(10)->create();

   Illuminate\Database\QueryException  SQLSTATE[HY000]: General error: 1 table posts has no column named author (
Connection: sqlite, SQL: insert into "posts" ("title", "author", "slug", "body", "updated_at", "created_at") valu
es (Sunt est sed vitae ad perspiciatis et est sit ut., Puput Hafshah Halimah, sunt-est-sed-vitae-ad-perspiciatis-
et-est-sit-ut, Minus aut quas quas qui incidunt exercitationem nam. Expedita est fuga aut odio consequatur ea. Pe
rspiciatis rerum autem culpa officiis aperiam ab., 2025-08-03 14:15:41, 2025-08-03 14:15:41)).

> exit

   INFO  Goodbye.


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan tinker
Psy Shell v0.12.9 (PHP 8.3.16 — cli) by Justin Hileman
> App\Models\Post::factory(10)->create();
= Illuminate\Database\Eloquent\Collection {#5391
    all: [
      App\Models\Post {#5432
        title: "Dicta excepturi voluptatibus consequatur quis eius.",
        author_id: 1,
        slug: "dicta-excepturi-voluptatibus-consequatur-quis-eius",
        body: "Dolor iste magni perspiciatis labore rem. Ad harum nemo aspernatur qui qui animi. Enim perferendis
 repudiandae aut beatae.",
        updated_at: "2025-08-03 14:18:14",
        created_at: "2025-08-03 14:18:14",
        id: 1,
      },
      App\Models\Post {#5419
        title: "Vel eligendi eum saepe maxime nihil aut esse delectus.",
        author_id: 2,
        slug: "vel-eligendi-eum-saepe-maxime-nihil-aut-esse-delectus",
        body: "Sunt quia inventore reprehenderit non beatae. Nihil dolores nobis natus eaque molestiae. Minima cu
piditate ducimus harum. Vel quae quasi qui maxime nulla. Beatae occaecati tempore soluta.",
        updated_at: "2025-08-03 14:18:14",
        created_at: "2025-08-03 14:18:14",
        id: 2,
      },
      App\Models\Post {#5393
        title: "Cupiditate debitis quia possimus voluptatem blanditiis ut tempora.",
        author_id: 3,
        slug: "cupiditate-debitis-quia-possimus-voluptatem-blanditiis-ut-tempora",
        body: "Ratione enim aut minus officiis enim non. Aut qui quidem velit. Aut aut illo qui non dolore aut. D
icta dolores odio porro reprehenderit consequatur omnis.",
        updated_at: "2025-08-03 14:18:14",
        created_at: "2025-08-03 14:18:14",
        id: 3,
      },
      App\Models\Post {#5442
        title: "Debitis consequatur esse id.",
        author_id: 4,
        slug: "debitis-consequatur-esse-id",
        body: "Dolor nam omnis architecto mollitia reiciendis culpa. Tenetur excepturi deserunt alias eaque quis
magnam velit placeat. Sequi et ut ullam corrupti nihil ab.",
        updated_at: "2025-08-03 14:18:14",
        created_at: "2025-08-03 14:18:14",
        id: 4,
      },
      App\Models\Post {#5446
        title: "Nostrum ipsam quam aspernatur voluptas adipisci excepturi velit quae quam excepturi.",
        author_id: 5,
        slug: "nostrum-ipsam-quam-aspernatur-voluptas-adipisci-excepturi-velit-quae-quam-excepturi",
        body: "Non odio inventore ipsum corporis in. Id amet vero omnis rem voluptatum dolorum sunt atque. Velit
eos est ut magnam accusamus. Unde libero et veniam suscipit harum aperiam deserunt et.",
        updated_at: "2025-08-03 14:18:14",
        created_at: "2025-08-03 14:18:14",
        id: 5,
      },
      App\Models\Post {#5436
        title: "Atque asperiores possimus repudiandae est velit rerum iure reprehenderit.",
        author_id: 6,
        slug: "atque-asperiores-possimus-repudiandae-est-velit-rerum-iure-reprehenderit",
        body: "Omnis architecto rerum voluptas et quaerat illum sunt. Odio officia est omnis consequuntur et ut m
inima. Sint iure perferendis voluptate unde nesciunt. Quis ab maxime et facere.",
        updated_at: "2025-08-03 14:18:14",
        created_at: "2025-08-03 14:18:14",
        id: 6,
      },
      App\Models\Post {#5438
        title: "Nemo praesentium atque ut dolore ab voluptatem incidunt placeat.",
        author_id: 7,
        slug: "nemo-praesentium-atque-ut-dolore-ab-voluptatem-incidunt-placeat",
        body: "Ut cumque et vitae aut pariatur. Voluptatem perferendis corrupti saepe quia. Distinctio non qui re
iciendis.",
        updated_at: "2025-08-03 14:18:14",
        created_at: "2025-08-03 14:18:14",
        id: 7,
      },
      App\Models\Post {#5441
        title: "Commodi et eveniet et dolores blanditiis est et dicta dolorum velit.",
        author_id: 8,
        slug: "commodi-et-eveniet-et-dolores-blanditiis-est-et-dicta-dolorum-velit",
        body: "Accusantium laboriosam et laboriosam blanditiis. Autem cum qui voluptate est libero illum. Enim at
 quia eum minima harum. Nam laudantium vel mollitia doloribus rem quia.",
        updated_at: "2025-08-03 14:18:14",
        created_at: "2025-08-03 14:18:14",
        id: 8,
      },
      App\Models\Post {#6196
        title: "Et esse mollitia aspernatur hic ut ex ut dolorem.",
        author_id: 9,
        slug: "et-esse-mollitia-aspernatur-hic-ut-ex-ut-dolorem",
        body: "Sint commodi laborum tenetur et. Et laudantium cupiditate id ducimus quasi porro necessitatibus. B
landitiis est consequatur animi repellat consequatur quia labore.",
        updated_at: "2025-08-03 14:18:14",
        created_at: "2025-08-03 14:18:14",
        id: 9,
      },
      App\Models\Post {#6197
        title: "Voluptatibus cupiditate quia autem sed officiis sed.",
        author_id: 10,
        slug: "voluptatibus-cupiditate-quia-autem-sed-officiis-sed",
        body: "Pariatur porro quis fugiat nostrum. Minima ut provident vero. Voluptatum officiis eos non earum. S
uscipit culpa voluptatem dolorem voluptatibus voluptatem.",
        updated_at: "2025-08-03 14:18:14",
        created_at: "2025-08-03 14:18:14",
        id: 10,
      },
    ],
  }

> exit

   INFO  Goodbye.


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan migrate:fresh

  Dropping all tables ............................................................................ 12.95ms DONE

   INFO  Preparing database.

  Creating migration table ........................................................................ 9.29ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table ........................................................... 26.51ms DONE
  0001_01_01_000001_create_cache_table ........................................................... 10.58ms DONE
  0001_01_01_000002_create_jobs_table ............................................................ 27.27ms DONE
  2025_08_03_104550_create_posts_table ............................................................ 6.97ms DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan tinker
Psy Shell v0.12.9 (PHP 8.3.16 — cli) by Justin Hileman
> App\Models\Post::factory(20)->recyle(User::factory(5)->create()->create();

   PARSE ERROR  PHP Parse error: Syntax error, unexpected ';', expecting ')' in vendor\psy\psysh\src\Exception\Pa
rseErrorException.php on line 44.

> App\Models\Post::factory(20)->recyle(User::factory(5)->create())->create();
[!] Aliasing 'User' to 'App\Models\User' for this Tinker session.

   BadMethodCallException  Call to undefined method Database\Factories\PostFactory::recyle().

> App\Models\Post::factory(20)->recycle(User::factory(5)->create())->create();
= Illuminate\Database\Eloquent\Collection {#5386
    all: [
      App\Models\Post {#6207
        title: "Ullam nesciunt nobis placeat ipsa quia.",
        author_id: 6,
        slug: "ullam-nesciunt-nobis-placeat-ipsa-quia",
        body: "Debitis iusto quis voluptas eum. Aliquam nihil quia aut hic quia nam assumenda. Aut ipsa adipisci
in ut quae aliquam beatae. Et nihil amet dolorem ex minus excepturi.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 1,
      },
      App\Models\Post {#5388
        title: "Enim esse blanditiis provident et asperiores dolores reiciendis suscipit.",
        author_id: 6,
        slug: "enim-esse-blanditiis-provident-et-asperiores-dolores-reiciendis-suscipit",
        body: "Quo laborum autem tempora ipsa. Occaecati minus rerum voluptas incidunt repellendus. Recusandae pr
aesentium autem harum aliquam vel.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 2,
      },
      App\Models\Post {#5409
        title: "Vitae aut qui quo magnam qui accusamus ut.",
        author_id: 8,
        slug: "vitae-aut-qui-quo-magnam-qui-accusamus-ut",
        body: "Non dolorum ut voluptas nihil nihil. Vel voluptatem ipsam quos ea. Beatae dignissimos natus porro
dolore reiciendis.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 3,
      },
      App\Models\Post {#6425
        title: "Laborum ullam dolore placeat maxime fugiat labore.",
        author_id: 10,
        slug: "laborum-ullam-dolore-placeat-maxime-fugiat-labore",
        body: "Exercitationem fuga aut veritatis eos fuga nihil ea. Quia et dolores eos. Est totam ut explicabo i
psa eligendi. Enim inventore velit quae.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 4,
      },
      App\Models\Post {#6426
        title: "Et consequatur molestiae architecto aut aut.",
        author_id: 9,
        slug: "et-consequatur-molestiae-architecto-aut-aut",
        body: "Velit nesciunt aspernatur accusamus quidem ut. Cumque earum fugiat dolorem qui sint maiores. Harum
 qui ratione qui omnis.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 5,
      },
      App\Models\Post {#6427
        title: "Et voluptas quasi veniam repellendus.",
        author_id: 6,
        slug: "et-voluptas-quasi-veniam-repellendus",
        body: "Qui rerum maiores alias illo qui qui cupiditate. Velit est dolor ratione et fuga eveniet sapiente.
 Aut aut et veritatis ipsam omnis similique et. Accusamus quaerat eum atque eveniet voluptatem.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 6,
      },
      App\Models\Post {#6428
        title: "Repellendus commodi velit aut nesciunt.",
        author_id: 7,
        slug: "repellendus-commodi-velit-aut-nesciunt",
        body: "Sit et quidem et ut qui impedit vel. Nihil soluta consectetur adipisci.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 7,
      },
      App\Models\Post {#6429
        title: "Aut quidem sunt recusandae odit eum quo saepe.",
        author_id: 8,
        slug: "aut-quidem-sunt-recusandae-odit-eum-quo-saepe",
        body: "Eum hic sed facilis eum et. Sequi velit temporibus qui nesciunt consequatur.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 8,
      },
      App\Models\Post {#6430
        title: "Sint necessitatibus commodi rerum ut aut earum occaecati voluptas.",
        author_id: 9,
        slug: "sint-necessitatibus-commodi-rerum-ut-aut-earum-occaecati-voluptas",
        body: "Veritatis accusamus quos consequatur facilis. Non adipisci vel dolor eligendi quis. Voluptatem dol
oremque eius sunt similique autem tempore.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 9,
      },
      App\Models\Post {#6431
        title: "Nihil et autem molestiae sed sed ea et.",
        author_id: 9,
        slug: "nihil-et-autem-molestiae-sed-sed-ea-et",
        body: "Est nostrum est at. Eum aut molestiae est architecto consequatur iste. Autem iure nisi dolor minus
 voluptas.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 10,
      },
      App\Models\Post {#6432
        title: "Vitae voluptatem consequuntur libero modi accusantium eveniet facere a earum.",
        author_id: 8,
        slug: "vitae-voluptatem-consequuntur-libero-modi-accusantium-eveniet-facere-a-earum",
        body: "Sed voluptas odit quia suscipit. Labore illum deleniti quibusdam blanditiis velit sit non. Sint eu
m beatae aut nesciunt maiores. Quo explicabo illum voluptatibus voluptatem sed et dolorum.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 11,
      },
      App\Models\Post {#6433
        title: "Et ducimus pariatur atque omnis.",
        author_id: 9,
        slug: "et-ducimus-pariatur-atque-omnis",
        body: "Aut eum distinctio esse in voluptatem ut numquam. Aut aut ratione id porro. A assumenda recusandae
 nulla vitae delectus id sit qui.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 12,
      },
      App\Models\Post {#6434
        title: "Animi rerum nobis quod dolore inventore placeat aperiam et corporis.",
        author_id: 7,
        slug: "animi-rerum-nobis-quod-dolore-inventore-placeat-aperiam-et-corporis",
        body: "Quo soluta quae officiis molestiae culpa id. Et beatae nam est distinctio. Accusantium doloremque
aspernatur vitae iusto nemo nulla laborum.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 13,
      },
      App\Models\Post {#6435
        title: "Provident voluptatem non exercitationem assumenda voluptatem animi expedita.",
        author_id: 8,
        slug: "provident-voluptatem-non-exercitationem-assumenda-voluptatem-animi-expedita",
        body: "Illo culpa fuga molestias labore illum similique debitis. Eius voluptas pariatur aut aut ut. Rem u
t dolor fuga molestias qui.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 14,
      },
      App\Models\Post {#6436
        title: "Tempore numquam ullam hic est.",
        author_id: 10,
        slug: "tempore-numquam-ullam-hic-est",
        body: "Rerum blanditiis vel velit nihil minima excepturi est corrupti. At exercitationem qui nulla minus
eos. Eum hic porro odit necessitatibus fuga. Quis pariatur voluptatem sit magni.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 15,
      },
      App\Models\Post {#6437
        title: "Sunt numquam non nobis laborum non.",
        author_id: 6,
        slug: "sunt-numquam-non-nobis-laborum-non",
        body: "In iure mollitia ullam dignissimos. Quisquam officia rerum rem est. Cumque sunt recusandae consequ
untur. Aperiam doloremque sint occaecati est doloremque enim et enim.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 16,
      },
      App\Models\Post {#6438
        title: "Voluptas aperiam cupiditate error voluptatem nemo repellendus et.",
        author_id: 6,
        slug: "voluptas-aperiam-cupiditate-error-voluptatem-nemo-repellendus-et",
        body: "Veniam incidunt illo rerum autem at. Reiciendis omnis id assumenda eveniet nihil quis exercitation
em rerum. Nisi voluptas nostrum nulla dolor minus inventore ipsum.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 17,
      },
      App\Models\Post {#6439
        title: "Explicabo ea nam eos modi consectetur possimus consequatur ut quisquam.",
        author_id: 10,
        slug: "explicabo-ea-nam-eos-modi-consectetur-possimus-consequatur-ut-quisquam",
        body: "Nostrum atque blanditiis itaque eos pariatur. Molestias corrupti fuga autem velit illo quo officii
s. Et reprehenderit minus quibusdam facere ut eum.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 18,
      },
      App\Models\Post {#6440
        title: "Debitis eum animi ad magnam quia corporis.",
        author_id: 9,
        slug: "debitis-eum-animi-ad-magnam-quia-corporis",
        body: "Fuga omnis odio eum vel vel aliquid illum. Laudantium vel qui aliquid consequatur nostrum vel nequ
e et. Odio ex reiciendis qui ex ut.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 19,
      },
      App\Models\Post {#6441
        title: "Enim accusamus dignissimos nihil quasi.",
        author_id: 8,
        slug: "enim-accusamus-dignissimos-nihil-quasi",
        body: "Praesentium est architecto ut adipisci sapiente atque aut. Eum deserunt aut earum ex debitis neque
 aperiam non. Vel provident rem quasi culpa quibusdam excepturi. Illum eum commodi et sit.",
        updated_at: "2025-08-03 14:23:23",
        created_at: "2025-08-03 14:23:23",
        id: 20,
      },
    ],
  }

> exit

   INFO  Goodbye.


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan tinker
Psy Shell v0.12.9 (PHP 8.3.16 — cli) by Justin Hileman
> $author = App\Models\Users::First();

   Error  Class "App\Models\Users" not found.

> $author = App\Models\User::First();
= App\Models\User {#6107
    id: 1,
    name: "Laras Hastuti",
    email: "jhidayanto@example.net",
    email_verified_at: "2025-08-03 14:23:04",
    #password: "$2y$12$crCOY/NXrKCfgcbTINq8q.4tdKAylG6p5Z8xzVSly6tHgyCeNIN3i",
    #remember_token: "RDfsK169m1",
    created_at: "2025-08-03 14:23:04",
    updated_at: "2025-08-03 14:23:04",
  }

> $author->posts
= Illuminate\Database\Eloquent\Collection {#6106
    all: [],
  }

> $author = App\Models\User::first();
= App\Models\User {#5356
    id: 1,
    name: "Laras Hastuti",
    email: "jhidayanto@example.net",
    email_verified_at: "2025-08-03 14:23:04",
    #password: "$2y$12$crCOY/NXrKCfgcbTINq8q.4tdKAylG6p5Z8xzVSly6tHgyCeNIN3i",
    #remember_token: "RDfsK169m1",
    created_at: "2025-08-03 14:23:04",
    updated_at: "2025-08-03 14:23:04",
  }

> $author->posts
= Illuminate\Database\Eloquent\Collection {#5359
    all: [],
  }

> $author = App\Models\User::last();

   BadMethodCallException  Call to undefined method App\Models\User::last().

> $author = App\Models\User::last();

   BadMethodCallException  Call to undefined method App\Models\User::last().

> $author = App\Models\User::find(10);
= App\Models\User {#5365
    id: 10,
    name: "Cagak Pangestu",
    email: "novi42@example.net",
    email_verified_at: "2025-08-03 14:23:23",
    #password: "$2y$12$crCOY/NXrKCfgcbTINq8q.4tdKAylG6p5Z8xzVSly6tHgyCeNIN3i",
    #remember_token: "IAuwMx7Ebz",
    created_at: "2025-08-03 14:23:23",
    updated_at: "2025-08-03 14:23:23",
  }

> $author->posts
= Illuminate\Database\Eloquent\Collection {#6378
    all: [
      App\Models\Post {#5338
        id: 4,
        title: "Laborum ullam dolore placeat maxime fugiat labore.",
        slug: "laborum-ullam-dolore-placeat-maxime-fugiat-labore",
        author_id: 10,
        body: "Exercitationem fuga aut veritatis eos fuga nihil ea. Quia et dolores eos. Est totam ut explicabo i
psa eligendi. Enim inventore velit quae.",
        created_at: "2025-08-03 14:23:23",
        updated_at: "2025-08-03 14:23:23",
      },
      App\Models\Post {#5355
        id: 15,
        title: "Tempore numquam ullam hic est.",
        slug: "tempore-numquam-ullam-hic-est",
        author_id: 10,
        body: "Rerum blanditiis vel velit nihil minima excepturi est corrupti. At exercitationem qui nulla minus
eos. Eum hic porro odit necessitatibus fuga. Quis pariatur voluptatem sit magni.",
        created_at: "2025-08-03 14:23:23",
        updated_at: "2025-08-03 14:23:23",
      },
      App\Models\Post {#5348
        id: 18,
        title: "Explicabo ea nam eos modi consectetur possimus consequatur ut quisquam.",
        slug: "explicabo-ea-nam-eos-modi-consectetur-possimus-consequatur-ut-quisquam",
        author_id: 10,
        body: "Nostrum atque blanditiis itaque eos pariatur. Molestias corrupti fuga autem velit illo quo officii
s. Et reprehenderit minus quibusdam facere ut eum.",
        created_at: "2025-08-03 14:23:23",
        updated_at: "2025-08-03 14:23:23",
      },
    ],
  }

> $post = App\Models\Post::first()
= App\Models\Post {#6382
    id: 1,
    title: "Ullam nesciunt nobis placeat ipsa quia.",
    slug: "ullam-nesciunt-nobis-placeat-ipsa-quia",
    author_id: 6,
    body: "Debitis iusto quis voluptas eum. Aliquam nihil quia aut hic quia nam assumenda. Aut ipsa adipisci in u
t quae aliquam beatae. Et nihil amet dolorem ex minus excepturi.",
    created_at: "2025-08-03 14:23:23",
    updated_at: "2025-08-03 14:23:23",
  }

> $post->author;
= App\Models\User {#6108
    id: 6,
    name: "Zamira Namaga",
    email: "wibowo.salwa@example.net",
    email_verified_at: "2025-08-03 14:23:23",
    #password: "$2y$12$crCOY/NXrKCfgcbTINq8q.4tdKAylG6p5Z8xzVSly6tHgyCeNIN3i",
    #remember_token: "k06QWi49hh",
    created_at: "2025-08-03 14:23:23",
    updated_at: "2025-08-03 14:23:23",
  }

>
```

lanjutan

```bash
    id: 6,
    name: "Zamira Namaga",
    email: "wibowo.salwa@example.net",
    email_verified_at: "2025-08-03 14:23:23",
    #password: "$2y$12$crCOY/NXrKCfgcbTINq8q.4tdKAylG6p5Z8xzVSly6tHgyCeNIN3i",
    #remember_token: "k06QWi49hh",
    created_at: "2025-08-03 14:23:23",
    updated_at: "2025-08-03 14:23:23",
  }

> exit

   INFO  Goodbye.


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan migrate:fresh

  Dropping all tables ................................................................................. 1s DONE

   INFO  Preparing database.

  Creating migration table ....................................................................... 71.59ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table .......................................................... 125.00ms DONE
  0001_01_01_000001_create_cache_table ............................................................ 7.90ms DONE
  0001_01_01_000002_create_jobs_table ............................................................ 61.60ms DONE
  2025_08_03_104550_create_posts_table ............................................................ 6.65ms DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan tinker
Psy Shell v0.12.9 (PHP 8.3.16 — cli) by Justin Hileman
> App\Models\Post::factory(30)->recycle(User::factory(5)->create())->create();
[!] Aliasing 'User' to 'App\Models\User' for this Tinker session.
= Illuminate\Database\Eloquent\Collection {#5418
    all: [
      App\Models\Post {#6207
        title: "Aut vel et voluptatem ut ea sed voluptatibus.",
        author_id: 3,
        slug: "aut-vel-et-voluptatem-ut-ea-sed-voluptatibus",
        body: "Illum ea officia ipsam laborum. Perferendis sit veritatis debitis optio qui temporibus soluta. Est
 repudiandae harum nihil molestias tempora dolores. Atque maiores pariatur eligendi.",
        updated_at: "2025-08-03 20:53:14",
        created_at: "2025-08-03 20:53:14",
        id: 1,
      },
      App\Models\Post {#5416
        title: "Voluptates ex voluptatibus nihil est et natus quam.",
        author_id: 1,
        slug: "voluptates-ex-voluptatibus-nihil-est-et-natus-quam",
        body: "Inventore dolore enim illo libero qui. Nihil quibusdam dolore quidem et ipsam. Repellendus consequ
atur autem aut fuga sequi.",
        updated_at: "2025-08-03 20:53:14",
        created_at: "2025-08-03 20:53:14",
        id: 2,
      },
      App\Models\Post {#5407
        title: "Magnam accusamus magnam et vero perferendis consequatur ratione perferendis officiis qui.",
        author_id: 3,
        slug: "magnam-accusamus-magnam-et-vero-perferendis-consequatur-ratione-perferendis-officiis-qui",
        body: "Eligendi et beatae occaecati aspernatur deleniti in. Itaque corrupti nulla a. Sunt harum ipsum con
sequatur repudiandae neque sunt. Et quasi quisquam numquam omnis similique.",
        updated_at: "2025-08-03 20:53:14",
        created_at: "2025-08-03 20:53:14",
        id: 3,
      },
      App\Models\Post {#6208
        title: "Modi distinctio aut ut in perferendis ad aliquam.",
        author_id: 5,
        slug: "modi-distinctio-aut-ut-in-perferendis-ad-aliquam",
        body: "Quidem asperiores ut dolor placeat. Excepturi aliquid porro molestiae a assumenda sunt ex. Unde un
de delectus corporis adipisci nulla nam.",
        updated_at: "2025-08-03 20:53:14",
        created_at: "2025-08-03 20:53:14",
        id: 4,
      },
      App\Models\Post {#5799
        title: "Repellendus quis corrupti vitae consequatur nesciunt quae voluptatibus libero assumenda.",
        author_id: 3,
        slug: "repellendus-quis-corrupti-vitae-consequatur-nesciunt-quae-voluptatibus-libero-assumenda",
        body: "Autem occaecati alias voluptatibus rerum. Non velit eum expedita earum reprehenderit sint. Numquam
 quia totam ut nisi doloremque.",
        updated_at: "2025-08-03 20:53:14",
        created_at: "2025-08-03 20:53:14",
        id: 5,
      },
      App\Models\Post {#6158
        title: "Molestiae aliquid consectetur nobis laudantium.",
        author_id: 1,
        slug: "molestiae-aliquid-consectetur-nobis-laudantium",
        body: "Unde est nostrum in quibusdam. Consequatur dolorem numquam et perspiciatis. Molestiae et quam amet
 et reprehenderit.",
        updated_at: "2025-08-03 20:53:14",
        created_at: "2025-08-03 20:53:14",
        id: 6,
      },
      App\Models\Post {#6423
        title: "Eligendi cumque nisi dolores praesentium quia.",
        author_id: 4,
        slug: "eligendi-cumque-nisi-dolores-praesentium-quia",
        body: "Ullam tenetur quia consequatur provident. Adipisci ipsum velit provident deleniti. Et et tempora a
lias possimus beatae.",
        updated_at: "2025-08-03 20:53:14",
        created_at: "2025-08-03 20:53:14",
        id: 7,
      },
      App\Models\Post {#6424
        title: "Eos impedit culpa numquam similique corrupti quia consectetur.",
        author_id: 1,
        slug: "eos-impedit-culpa-numquam-similique-corrupti-quia-consectetur",
        body: "Aut rerum odit et dicta velit. Tempora exercitationem omnis sunt et quia.",
        updated_at: "2025-08-03 20:53:14",
        created_at: "2025-08-03 20:53:14",
        id: 8,
      },
      App\Models\Post {#6425
        title: "Quae omnis repudiandae sed facere omnis.",
        author_id: 3,
        slug: "quae-omnis-repudiandae-sed-facere-omnis",
        body: "Dolores iste ipsum qui ullam. Mollitia soluta et porro voluptatibus temporibus sapiente. Quaerat q
uas quidem sed fuga dolorum rerum id. Nam deserunt quisquam doloribus distinctio id impedit.",
        updated_at: "2025-08-03 20:53:14",
        created_at: "2025-08-03 20:53:14",
        id: 9,
      },
      App\Models\Post {#6426
        title: "Quia reprehenderit magnam temporibus sit aut quia.",
        author_id: 5,
        slug: "quia-reprehenderit-magnam-temporibus-sit-aut-quia",
        body: "Voluptatem itaque aliquam non eos. Aut et nobis quo necessitatibus recusandae. Ad in consectetur d
olorum iusto.",
        updated_at: "2025-08-03 20:53:14",
        created_at: "2025-08-03 20:53:14",
        id: 10,
      },
      App\Models\Post {#6427
        title: "Est tempore dolores quas officia animi iste alias consequatur.",
        author_id: 1,
        slug: "est-tempore-dolores-quas-officia-animi-iste-alias-consequatur",
        body: "Quibusdam optio sit facilis commodi ea iusto consequatur. Odio rem autem voluptatem dolor molestia
s rerum. Saepe ab et esse aspernatur voluptas omnis voluptate.",
        updated_at: "2025-08-03 20:53:14",
        created_at: "2025-08-03 20:53:14",
        id: 11,
      },
      App\Models\Post {#6428
        title: "Et deserunt deleniti id sapiente sint.",
        author_id: 2,
        slug: "et-deserunt-deleniti-id-sapiente-sint",
        body: "Hic voluptatibus omnis molestiae quasi voluptatem quaerat. Recusandae saepe nisi commodi ex rerum
ut labore suscipit. Voluptas sed suscipit cupiditate est voluptate sint.",
        updated_at: "2025-08-03 20:53:14",
        created_at: "2025-08-03 20:53:14",
        id: 12,
      },
      App\Models\Post {#6429
        title: "Molestias assumenda ipsam itaque quaerat et similique.",
        author_id: 4,
        slug: "molestias-assumenda-ipsam-itaque-quaerat-et-similique",
        body: "Fugit ipsa id autem voluptates necessitatibus corrupti perspiciatis. Quo officia quae debitis blan
ditiis. Facere repellendus est voluptas mollitia neque libero beatae.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 13,
      },
      App\Models\Post {#6430
        title: "Sed dicta reprehenderit sed ut molestias expedita.",
        author_id: 3,
        slug: "sed-dicta-reprehenderit-sed-ut-molestias-expedita",
        body: "Dolorum expedita non alias rerum. Omnis ea ducimus quidem. Quis alias totam iste culpa velit. Iste
 consequatur ut saepe aspernatur.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 14,
      },
      App\Models\Post {#6431
        title: "Aut ullam et tenetur.",
        author_id: 4,
        slug: "aut-ullam-et-tenetur",
        body: "Rerum quidem error non id cupiditate debitis. Facilis nobis aut quas in nobis. Omnis error dolorem
 nostrum. Sunt excepturi voluptatem quis inventore.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 15,
      },
      App\Models\Post {#6432
        title: "Esse perspiciatis officia aut dolore magnam deserunt quis totam sit qui.",
        author_id: 1,
        slug: "esse-perspiciatis-officia-aut-dolore-magnam-deserunt-quis-totam-sit-qui",
        body: "Tenetur dolor eum nam reprehenderit. Qui optio odit dicta aut repellendus qui. Nobis necessitatibu
s nobis et id.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 16,
      },
      App\Models\Post {#6433
        title: "Soluta tenetur sequi deserunt et praesentium atque excepturi ratione.",
        author_id: 2,
        slug: "soluta-tenetur-sequi-deserunt-et-praesentium-atque-excepturi-ratione",
        body: "Quos ut officiis rerum veritatis harum cumque. Excepturi tempore eos modi qui ea asperiores ut eli
gendi. Deleniti et laudantium fugit impedit tenetur fugit inventore.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 17,
      },
      App\Models\Post {#6434
        title: "Nemo ut rerum sit doloremque aut sint.",
        author_id: 5,
        slug: "nemo-ut-rerum-sit-doloremque-aut-sint",
        body: "Et debitis voluptatibus rem alias ex. Voluptas consequuntur libero quibusdam aspernatur veritatis.
 Possimus quia fugit labore rem sit repudiandae ipsam.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 18,
      },
      App\Models\Post {#6435
        title: "Deserunt alias dolore suscipit eos suscipit.",
        author_id: 3,
        slug: "deserunt-alias-dolore-suscipit-eos-suscipit",
        body: "Quia quasi dolores sint libero ut. Facilis excepturi est enim est sed debitis a. Recusandae verita
tis dicta accusantium consequatur. Non voluptas quas harum voluptatibus nobis porro.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 19,
      },
      App\Models\Post {#6436
        title: "Facere ratione necessitatibus consequuntur ea.",
        author_id: 5,
        slug: "facere-ratione-necessitatibus-consequuntur-ea",
        body: "Facere recusandae cumque nam ea. Voluptate ipsum at et est saepe nisi ut eius. Error libero ipsam
delectus est pariatur. Sunt hic at deserunt.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 20,
      },
      App\Models\Post {#6437
        title: "Et perferendis odio ut ullam possimus nemo.",
        author_id: 2,
        slug: "et-perferendis-odio-ut-ullam-possimus-nemo",
        body: "Nam velit repudiandae totam ipsum quod ab. Ut laudantium repudiandae est veritatis non quaerat.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 21,
      },
      App\Models\Post {#6438
        title: "Quas omnis quisquam harum ullam.",
        author_id: 2,
        slug: "quas-omnis-quisquam-harum-ullam",
        body: "Dolorem esse blanditiis nesciunt quam non sunt. Qui nostrum ut dolorem nesciunt dolore. Quo qui qu
ia distinctio nisi est ratione non.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 22,
      },
      App\Models\Post {#6439
        title: "Rerum iste inventore pariatur ut libero.",
        author_id: 3,
        slug: "rerum-iste-inventore-pariatur-ut-libero",
        body: "Adipisci quae aliquam facilis mollitia qui eveniet ut. Velit perspiciatis maiores eos aperiam anim
i veniam. Modi temporibus in dignissimos. Quo dolor sapiente eaque cumque consequuntur nihil dolore.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 23,
      },
      App\Models\Post {#6440
        title: "Sed reiciendis quia aspernatur est dolorem repudiandae non repellat.",
        author_id: 1,
        slug: "sed-reiciendis-quia-aspernatur-est-dolorem-repudiandae-non-repellat",
        body: "Earum voluptas dolorum facere. Excepturi et eum labore rerum. Tempore qui fuga culpa et eos ipsum.
 Accusantium enim iusto aut sint doloribus est.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 24,
      },
      App\Models\Post {#6441
        title: "Consequatur voluptatibus optio eos cupiditate velit soluta.",
        author_id: 3,
        slug: "consequatur-voluptatibus-optio-eos-cupiditate-velit-soluta",
        body: "Ut vel cumque voluptas iure excepturi consequatur similique aut. Facilis similique veritatis volup
tatem sit exercitationem. Sit fugit debitis harum adipisci nam facilis perspiciatis.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 25,
      },
      App\Models\Post {#6442
        title: "Deleniti et pariatur quis sint eligendi est necessitatibus consectetur.",
        author_id: 5,
        slug: "deleniti-et-pariatur-quis-sint-eligendi-est-necessitatibus-consectetur",
        body: "Laboriosam voluptas beatae nobis ex suscipit consequatur sequi ipsum. Voluptas amet error quia iur
e sit esse eos. Iusto pariatur dolorum quaerat amet molestias in ut et.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 26,
      },
      App\Models\Post {#6443
        title: "Non tenetur recusandae dolorem doloribus.",
        author_id: 3,
        slug: "non-tenetur-recusandae-dolorem-doloribus",
        body: "Et qui beatae minus nam. Et nihil cupiditate nam natus molestiae reprehenderit sed. Consequatur li
bero et omnis recusandae et. Veniam non illo hic iste aut.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 27,
      },
      App\Models\Post {#6444
        title: "Qui dicta alias molestiae quasi sit est.",
        author_id: 4,
        slug: "qui-dicta-alias-molestiae-quasi-sit-est",
        body: "Fugit sunt est laborum mollitia. Ut non porro id id. Ut ullam laboriosam voluptas laboriosam.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 28,
      },
      App\Models\Post {#6445
        title: "Totam amet praesentium vel corporis vel velit.",
        author_id: 5,
        slug: "totam-amet-praesentium-vel-corporis-vel-velit",
        body: "Eum ut eum et praesentium eum sit. Est harum nam provident distinctio aspernatur.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 29,
      },
      App\Models\Post {#6446
        title: "Enim minus ratione architecto labore.",
        author_id: 5,
        slug: "enim-minus-ratione-architecto-labore",
        body: "Laboriosam quia quae voluptas nobis voluptatem sed vel natus. Ut et minima sed sint eum. Tempora m
inus et fuga labore. A rem accusamus voluptatem eos minus quis nisi.",
        updated_at: "2025-08-03 20:53:15",
        created_at: "2025-08-03 20:53:15",
        id: 30,
      },
    ],
  }

> exit

> exit

   INFO  Goodbye.


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan make:model Category -mf

   INFO  Model [D:\laragon\www\belajar-laravel\app\Models\Category.php] created successfully.

   INFO  Factory [D:\laragon\www\belajar-laravel\database\factories\CategoryFactory.php] created successfully.

   INFO  Migration [D:\laragon\www\belajar-laravel\database\migrations/2025_08_03_210430_create_categories_table.php] created successfully.


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan migrate:fresh

  Dropping all tables ........................................................................... 9.43ms DONE

   INFO  Preparing database.

  Creating migration table ..................................................................... 10.34ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table ......................................................... 33.68ms DONE
  0001_01_01_000001_create_cache_table ......................................................... 11.25ms DONE
  0001_01_01_000002_create_jobs_table .......................................................... 24.08ms DONE
  2025_08_03_104550_create_posts_table .......................................................... 5.04ms DONE
  2025_08_03_210430_create_categories_table ..................................................... 5.16ms DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ composer dumbpautoload


  Command "dumbpautoload" is not defined.

  Did you mean one of these?
      dump-autoload
      dumpautoload



Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ composer dumpautoload
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

   INFO  Discovering packages.

  laravel/pail ......................................................................................... DONE
  laravel/sail ......................................................................................... DONE
  laravel/tinker ....................................................................................... DONE
  nesbot/carbon ........................................................................................ DONE
  nunomaduro/collision ................................................................................. DONE
  nunomaduro/termwind .................................................................................. DONE
  pestphp/pest-plugin-laravel .......................................................................... DONE

Generated optimized autoload files containing 6942 classes

Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan optimize:clear

   INFO  Clearing cached bootstrap files.

  config ........................................................................................ 2.98ms DONE
  cache ........................................................................................ 38.04ms DONE
  compiled ...................................................................................... 4.75ms DONE
  events ........................................................................................ 1.75ms DONE
  routes ........................................................................................ 1.16ms DONE
  views ........................................................................................ 24.79ms DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan tinker
Psy Shell v0.12.9 (PHP 8.3.16 — cli) by Justin Hileman
> App\Models\Post::factory(30)->recycle([Category::factory(3)->create(), User::factory(5)->create()])->create()
;
[!] Aliasing 'Category' to 'App\Models\Category' for this Tinker session.
[!] Aliasing 'User' to 'App\Models\User' for this Tinker session.
= Illuminate\Database\Eloquent\Collection {#5434
    all: [
      App\Models\Post {#6451
        title: "Error ad quae ut vel itaque nulla.",
        author_id: 1,
        category_id: 2,
        slug: "error-ad-quae-ut-vel-itaque-nulla",
        body: "Pariatur recusandae consequatur ipsa dolores quas iste. Et inventore nostrum beatae ut aut. Nobi
s aut voluptas magni.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 1,
      },
      App\Models\Post {#5415
        title: "Molestiae provident unde quia in officiis voluptas.",
        author_id: 2,
        category_id: 2,
        slug: "molestiae-provident-unde-quia-in-officiis-voluptas",
        body: "Dolor dignissimos rerum tenetur perferendis mollitia recusandae qui. Autem in ut ea animi quo iu
sto eum assumenda. Beatae nam nulla quibusdam quae velit laborum.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 2,
      },
      App\Models\Post {#5423
        title: "Qui et laborum pariatur consequatur.",
        author_id: 4,
        category_id: 2,
        slug: "qui-et-laborum-pariatur-consequatur",
        body: "Numquam est ut esse id. Ad aut rerum sunt assumenda. Laudantium voluptatem dolores sit cumque.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 3,
      },
      App\Models\Post {#6452
        title: "Quasi doloremque id soluta nihil.",
        author_id: 5,
        category_id: 1,
        slug: "quasi-doloremque-id-soluta-nihil",
        body: "Assumenda soluta magni repellat ut ut. Accusamus veritatis id quos aliquid praesentium id tempor
a aut. Explicabo est aut doloribus reiciendis aut aspernatur.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 4,
      },
      App\Models\Post {#6453
        title: "Et quos iste itaque dolorum itaque quidem debitis odio.",
        author_id: 2,
        category_id: 2,
        slug: "et-quos-iste-itaque-dolorum-itaque-quidem-debitis-odio",
        body: "Numquam eum ea corrupti voluptatibus culpa. Ad ea voluptas quis et blanditiis. Consectetur quaer
at velit rem aperiam. Ad quae et et dicta quos.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 5,
      },
      App\Models\Post {#6454
        title: "Autem reiciendis temporibus ut et quia et.",
        author_id: 4,
        category_id: 3,
        slug: "autem-reiciendis-temporibus-ut-et-quia-et",
        body: "Quo nisi quis quo rerum non rerum dicta. Et eum voluptas nihil totam. Repellendus odio molestias
 ducimus sint rerum recusandae culpa. Molestiae rerum sed laudantium sit qui rerum tempore.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 6,
      },
      App\Models\Post {#6455
        title: "Ratione reprehenderit non dolorem aspernatur aut voluptatem nostrum sunt.",
        author_id: 5,
        category_id: 3,
        slug: "ratione-reprehenderit-non-dolorem-aspernatur-aut-voluptatem-nostrum-sunt",
        body: "Harum fuga et repudiandae facere consequatur voluptas. Molestias recusandae iusto iste et. Velit
 iusto ipsam tenetur omnis mollitia explicabo enim. Quisquam tenetur et doloribus nihil quia in.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 7,
      },
      App\Models\Post {#6456
        title: "Similique eum consequuntur sed ipsam consequatur impedit alias.",
        author_id: 3,
        category_id: 2,
        slug: "similique-eum-consequuntur-sed-ipsam-consequatur-impedit-alias",
        body: "Aliquam quaerat ab quam. Est dolorum maxime rerum aut voluptatem harum. Dicta natus et laboriosa
m non quae nobis et esse.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 8,
      },
      App\Models\Post {#6457
        title: "Dolor et distinctio quaerat ut consequatur et.",
        author_id: 1,
        category_id: 3,
        slug: "dolor-et-distinctio-quaerat-ut-consequatur-et",
        body: "Dolor cumque ab est laboriosam minus iusto et. Explicabo totam amet doloribus nobis. Unde sit ut
 error. Deleniti quasi libero et et consequatur aut ea in.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 9,
      },
      App\Models\Post {#6458
        title: "Qui non odit magni tenetur.",
        author_id: 1,
        category_id: 1,
        slug: "qui-non-odit-magni-tenetur",
        body: "Consequatur cum dolores ut nulla voluptates. Eum harum eligendi dignissimos culpa aut voluptates
. Velit amet quaerat libero et sit modi ipsam.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 10,
      },
      App\Models\Post {#6459
        title: "Voluptas numquam ipsam consequatur qui.",
        author_id: 2,
        category_id: 3,
        slug: "voluptas-numquam-ipsam-consequatur-qui",
        body: "Est et ea sequi nemo et. Nemo distinctio rerum eius assumenda iure accusamus. Occaecati eos quae
 cumque aut praesentium id quae.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 11,
      },
      App\Models\Post {#6460
        title: "Fugiat quo officiis repellat enim laudantium cum.",
        author_id: 5,
        category_id: 1,
        slug: "fugiat-quo-officiis-repellat-enim-laudantium-cum",
        body: "Quas neque id fugiat tenetur esse tenetur. Aut ullam facere eum laborum dolores. Mollitia itaque
 non vel recusandae. Quam in et nisi.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 12,
      },
      App\Models\Post {#6461
        title: "Dolore ex sit ab quam sint quod.",
        author_id: 1,
        category_id: 2,
        slug: "dolore-ex-sit-ab-quam-sint-quod",
        body: "Rem omnis neque rerum incidunt. Fuga eum dolore natus iusto aliquid ipsa. Mollitia ea iure id do
loremque quia. Earum ex non vel et qui blanditiis veritatis occaecati.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 13,
      },
      App\Models\Post {#6462
        title: "Atque et nisi aut aliquam quis ratione.",
        author_id: 5,
        category_id: 3,
        slug: "atque-et-nisi-aut-aliquam-quis-ratione",
        body: "Sit nam sit aut magni minus esse. Totam dolorum nobis eum deserunt ad sed. Aut itaque iure aut m
odi perferendis suscipit et. Fugit ut recusandae aut occaecati.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 14,
      },
      App\Models\Post {#6463
        title: "Ut nemo aut et ut pariatur tempore mollitia.",
        author_id: 4,
        category_id: 1,
        slug: "ut-nemo-aut-et-ut-pariatur-tempore-mollitia",
        body: "Illo et vel autem. Nihil ea corrupti perferendis consequatur. Vel quasi magni sunt sint quaerat
ex praesentium. Et quis aliquid minus ducimus minima illum.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 15,
      },
      App\Models\Post {#6464
        title: "Rerum est dolore similique.",
        author_id: 1,
        category_id: 2,
        slug: "rerum-est-dolore-similique",
        body: "Voluptas eaque qui hic tempore eveniet reprehenderit adipisci enim. Quos quo error quaerat. Rati
one repellat sit adipisci saepe nostrum veniam repellat. Quaerat cupiditate magni tenetur ad.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 16,
      },
      App\Models\Post {#6465
        title: "Corporis voluptatem rerum sequi qui fugit.",
        author_id: 1,
        category_id: 1,
        slug: "corporis-voluptatem-rerum-sequi-qui-fugit",
        body: "Et fugiat expedita amet. Sint et possimus aut. Beatae nulla vel et tenetur quos consequatur quos
. Nulla aut ut voluptatem aut.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 17,
      },
      App\Models\Post {#6466
        title: "Est sed optio hic blanditiis debitis et dolores aut.",
        author_id: 3,
        category_id: 3,
        slug: "est-sed-optio-hic-blanditiis-debitis-et-dolores-aut",
        body: "Ipsam ea quia omnis vel tempore modi suscipit ratione. Sit aut explicabo culpa et voluptatum. Et
 consequatur autem distinctio beatae eos beatae aspernatur.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 18,
      },
      App\Models\Post {#6467
        title: "Sed architecto est nulla sit recusandae qui placeat quia illo voluptatum.",
        author_id: 4,
        category_id: 1,
        slug: "sed-architecto-est-nulla-sit-recusandae-qui-placeat-quia-illo-voluptatum",
        body: "Libero qui in sequi et. Repellat ex quis est ut esse quas nesciunt. Velit porro et eligendi enim
 at. Eveniet magnam deleniti nisi voluptatem.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 19,
      },
      App\Models\Post {#6468
        title: "Et consectetur ipsum officia perspiciatis velit.",
        author_id: 1,
        category_id: 3,
        slug: "et-consectetur-ipsum-officia-perspiciatis-velit",
        body: "Itaque mollitia aut vel nemo. Qui amet enim quaerat pariatur. Exercitationem quam qui numquam ac
cusantium non. Quis expedita qui quas occaecati laboriosam. Autem quo doloribus deserunt praesentium.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 20,
      },
      App\Models\Post {#6469
        title: "Earum totam iure nam sint omnis.",
        author_id: 5,
        category_id: 2,
        slug: "earum-totam-iure-nam-sint-omnis",
        body: "At odio corporis iure error. Molestiae neque inventore quisquam eligendi. Quos minus voluptatibu
s id quas corporis vitae odit eos. Eos hic doloremque soluta recusandae consequatur rem.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 21,
      },
      App\Models\Post {#6470
        title: "Necessitatibus quaerat voluptate ut qui exercitationem excepturi doloremque nemo.",
        author_id: 2,
        category_id: 2,
        slug: "necessitatibus-quaerat-voluptate-ut-qui-exercitationem-excepturi-doloremque-nemo",
        body: "Nam sed aut ab nihil. Et quis quia et eum praesentium. Nam quia ad est itaque et quidem. At sint
 magnam rem odio similique earum eos commodi.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 22,
      },
      App\Models\Post {#6471
        title: "Et quam iste maiores sunt ex et corrupti aut.",
        author_id: 5,
        category_id: 1,
        slug: "et-quam-iste-maiores-sunt-ex-et-corrupti-aut",
        body: "Consequatur saepe vero nihil optio. Corporis corporis atque neque voluptatem sint esse reiciendi
s ad. Est excepturi aut et quaerat autem velit et. Dolorem quia id omnis aut.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 23,
      },
      App\Models\Post {#6472
        title: "Cupiditate magni molestiae asperiores quo occaecati repudiandae.",
        author_id: 1,
        category_id: 2,
        slug: "cupiditate-magni-molestiae-asperiores-quo-occaecati-repudiandae",
        body: "Explicabo et reprehenderit inventore delectus sapiente. Aliquam ducimus sint aut unde blanditiis
. Esse aut laudantium dolores quidem vel.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 24,
      },
      App\Models\Post {#6473
        title: "Ut in quia animi est corrupti eaque rerum et in reiciendis.",
        author_id: 1,
        category_id: 3,
        slug: "ut-in-quia-animi-est-corrupti-eaque-rerum-et-in-reiciendis",
        body: "Voluptates deleniti odit distinctio sunt sapiente. Consequuntur sed quae corrupti sit qui occaec
ati. Non dicta et ipsam eveniet. Nihil accusantium assumenda saepe esse quas iusto ea sed.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 25,
      },
      App\Models\Post {#6474
        title: "Sint rerum quam eum assumenda ad eos ratione.",
        author_id: 3,
        category_id: 2,
        slug: "sint-rerum-quam-eum-assumenda-ad-eos-ratione",
        body: "Temporibus repellendus minus fuga. Non dolore facere ea modi in fuga quam. Veniam nemo officia r
erum illum explicabo omnis.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 26,
      },
      App\Models\Post {#6475
        title: "Error cum aliquam aut et rem deserunt at.",
        author_id: 5,
        category_id: 2,
        slug: "error-cum-aliquam-aut-et-rem-deserunt-at",
        body: "Et dolor doloremque consequatur ea quibusdam minus. Eum voluptatem eveniet enim velit aperiam. D
olores quaerat ut quidem aliquid et.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 27,
      },
      App\Models\Post {#6476
        title: "Omnis corporis sint nesciunt tempora.",
        author_id: 4,
        category_id: 2,
        slug: "omnis-corporis-sint-nesciunt-tempora",
        body: "Veniam iste autem sint enim rerum. Magni et in et nihil suscipit quos. Similique est quia earum
esse sed.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 28,
      },
      App\Models\Post {#6477
        title: "Et iste ut porro fugiat inventore quam debitis.",
        author_id: 2,
        category_id: 1,
        slug: "et-iste-ut-porro-fugiat-inventore-quam-debitis",
        body: "Necessitatibus distinctio incidunt nulla quo et. Omnis sint qui suscipit repellat. Debitis rem q
uasi eligendi nulla minus. Esse quisquam qui sit natus.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 29,
      },
      App\Models\Post {#6478
        title: "Omnis enim et commodi illo.",
        author_id: 4,
        category_id: 3,
        slug: "omnis-enim-et-commodi-illo",
        body: "Debitis velit consequatur vel adipisci. Sunt id cum at. Ipsum vel dolorum placeat quidem.",
        updated_at: "2025-08-03 21:32:11",
        created_at: "2025-08-03 21:32:11",
        id: 30,
      },
    ],
  }

> exit

   INFO  Goodbye.


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan migrate

   INFO  Nothing to migrate.


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan migrate:fresh

  Dropping all tables .......................................................................... 11.26ms DONE

   INFO  Preparing database.

  Creating migration table ...................................................................... 9.41ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table ......................................................... 28.46ms DONE
  0001_01_01_000001_create_cache_table .......................................................... 8.59ms DONE
  0001_01_01_000002_create_jobs_table .......................................................... 20.88ms DONE
  2025_08_03_104550_create_posts_table .......................................................... 5.94ms DONE
  2025_08_03_210430_create_categories_table ..................................................... 5.87ms DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan db:seed

   INFO  Seeding database.

  Database\Seeders\DatabaseSeeder ............................................................. 495.57ms DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan db:seed

   INFO  Seeding database.

  Database\Seeders\DatabaseSeeder ............................................................. 472.32ms DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan migrate:fresh

  Dropping all tables .......................................................................... 10.53ms DONE

   INFO  Preparing database.

  Creating migration table ..................................................................... 10.02ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table ......................................................... 33.43ms DONE
  0001_01_01_000001_create_cache_table .......................................................... 8.46ms DONE
  0001_01_01_000002_create_jobs_table .......................................................... 19.64ms DONE
  2025_08_03_104550_create_posts_table .......................................................... 4.68ms DONE
  2025_08_03_210430_create_categories_table ..................................................... 4.23ms DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan migrate:fresh --seed

  Dropping all tables .......................................................................... 10.42ms DONE

   INFO  Preparing database.

  Creating migration table ..................................................................... 10.30ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table ......................................................... 32.27ms DONE
  0001_01_01_000001_create_cache_table ......................................................... 11.57ms DONE
  0001_01_01_000002_create_jobs_table .......................................................... 24.70ms DONE
  2025_08_03_104550_create_posts_table .......................................................... 5.14ms DONE
  2025_08_03_210430_create_categories_table ..................................................... 5.29ms DONE


   INFO  Seeding database.

  Database\Seeders\DatabaseSeeder ............................................................. 504.05ms DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan migrate:fresh --seed

  Dropping all tables ........................................................................... 9.24ms DONE

   INFO  Preparing database.

  Creating migration table ...................................................................... 9.86ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table ......................................................... 32.62ms DONE
  0001_01_01_000001_create_cache_table ......................................................... 10.11ms DONE
  0001_01_01_000002_create_jobs_table .......................................................... 28.23ms DONE
  2025_08_03_104550_create_posts_table .......................................................... 8.20ms DONE
  2025_08_03_210430_create_categories_table ..................................................... 7.56ms DONE


   INFO  Seeding database.

  Database\Seeders\DatabaseSeeder ............................................................. 703.36ms DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan make:seeder CategorySeeder

   INFO  Seeder [D:\laragon\www\belajar-laravel\database\seeders\CategorySeeder.php] created successfully.


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan migrate:fresh --seed

  Dropping all tables .......................................................................... 10.49ms DONE

   INFO  Preparing database.

  Creating migration table ...................................................................... 9.88ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table ......................................................... 47.56ms DONE
  0001_01_01_000001_create_cache_table .......................................................... 9.11ms DONE
  0001_01_01_000002_create_jobs_table .......................................................... 28.91ms DONE
  2025_08_03_104550_create_posts_table .......................................................... 8.85ms DONE
  2025_08_03_210430_create_categories_table ..................................................... 5.03ms DONE


   INFO  Seeding database.

  Database\Seeders\DatabaseSeeder   Database\Seeders\CategorySeeder ...........................................
........................ RUNNING
  Database\Seeders\CategorySeeder ................................................................ 55 ms DONE

............................................................. 708.28ms DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan make:seeder UserSeeder

   INFO  Seeder [D:\laragon\www\belajar-laravel\database\seeders\UserSeeder.php] created successfully.


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan make:seeder PostSeeder

   INFO  Seeder [D:\laragon\www\belajar-laravel\database\seeders\PostSeeder.php] created successfully.


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ php artisan migrate:fresh --seed

  Dropping all tables ........................................................................... 8.99ms DONE

   INFO  Preparing database.

  Creating migration table ...................................................................... 8.60ms DONE

   INFO  Running migrations.

  0001_01_01_000000_create_users_table ......................................................... 32.27ms DONE
  0001_01_01_000001_create_cache_table .......................................................... 8.71ms DONE
  0001_01_01_000002_create_jobs_table .......................................................... 21.58ms DONE
  2025_08_03_104550_create_posts_table .......................................................... 6.26ms DONE
  2025_08_03_210430_create_categories_table ..................................................... 5.22ms DONE


   INFO  Seeding database.

  Database\Seeders\DatabaseSeeder   Database\Seeders\CategorySeeder ...........................................
........................ RUNNING
  Database\Seeders\CategorySeeder ................................................................ 36 ms DONE

  Database\Seeders\UserSeeder ....................................................................... RUNNING
  Database\Seeders\UserSeeder ................................................................... 885 ms DONE

  Database\Seeders\PostSeeder ....................................................................... RUNNING
  Database\Seeders\PostSeeder ................................................................... 146 ms DONE

................................................................... 1s DONE


Vanya@LAPTOP-RA740P9P MINGW64 /d/laragon/www/belajar-laravel
$ composer require barryvdh/laravel-debugbar --dev
./composer.json has been updated
Running composer update barryvdh/laravel-debugbar
Loading composer repositories with package information
Updating dependencies
Lock file operations: 2 installs, 0 updates, 0 removals
  - Locking barryvdh/laravel-debugbar (v3.16.0)
  - Locking php-debugbar/php-debugbar (v2.2.4)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 2 installs, 0 updates, 0 removals
  - Downloading php-debugbar/php-debugbar (v2.2.4)
  - Downloading barryvdh/laravel-debugbar (v3.16.0)
  - Installing php-debugbar/php-debugbar (v2.2.4): Extracting archive
  - Installing barryvdh/laravel-debugbar (v3.16.0): Extracting archive
2 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi

   INFO  Discovering packages.

  barryvdh/laravel-debugbar ............................................................................ DONE
  laravel/pail ......................................................................................... DONE
  laravel/sail ......................................................................................... DONE
  laravel/tinker ....................................................................................... DONE
  nesbot/carbon ........................................................................................ DONE
  nunomaduro/collision ................................................................................. DONE
  nunomaduro/termwind .................................................................................. DONE
  pestphp/pest-plugin-laravel .......................................................................... DONE

87 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan vendor:publish --tag=laravel-assets --ansi --force

   INFO  No publishable resources for tag [laravel-assets].

No security vulnerability advisories found.
Using version ^3.16 for barryvdh/laravel-debugbar
```

### Cara Membuka Tinker

```lua
php artisan tinker
```

### Cara membuat data Dummy pada User

```lua
$ php artisan tinker
Psy Shell v0.12.9 (PHP 8.3.16 — cli) by Justin Hileman
> App\Models\User::factory()->create();
```

---

## Catetan Progress Belajar Laravel WPU

### Jum'at, 01 Agustus 2025 - Model

Aku hari ini belajar sampai "Model" nanti aku lanjut ke video "Database & Migration"

Lanjutan - Database & Migration link : https://learn.wpucourse.id/member/course/SkDQxGYr445D0DwVd1soz/3/4

### Minggu, 03 Agustus 2025 - Eloquent Relationships

Aku hari ini belajar nyambungin database buat database dummy dan ngehubungin tabel author dengan post.

aku make table plus buat liat databasenya mirip kayak phpmyadmin.

lanjutannya aku belajar Post category. Link : https://learn.wpucourse.id/member/course/SkDQxGYr445D0DwVd1soz/3/11

### Senin, 04 Agustus 2025 - N+1 Problems

Aku hari ini belajar bagaimana mengelola query dengan baik agar tidak terjadi lazy loading.

saya mengubah lazy loading menjadi eager loading bertujuan untuk mengoptimalkan query.

lanjutan materi Update UI FlowBite : https://learn.wpucourse.id/member/course/SkDQxGYr445D0DwVd1soz/3/14

### Jum'at, 08 Agustus 2025 - Update UI Flowbite

Install the Flowbite Typography plugin via NPM

```bash
npm i -D flowbite-typography
```

Install Flowbite as a dependency using NPM by running the following command:

```bash
npm install flowbite --save
```

### Minggu, 10 Agustus 2025 - Tambah fitur Search
