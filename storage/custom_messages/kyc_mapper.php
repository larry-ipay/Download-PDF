<?php
const USER_TYPES = [
    "admin" => [
        "key" => 1,
        "slug" => "admin",
        "name" => "Administrator"
    ],
    "normal" => [
        "key" => 2,
        "slug" => "normal",
        "name" => "Normal Account"
    ]
];

const BUSINESS_TYPES = [
    "governmentDepartment" => [
        "key" => "1",
        "name" => "Government Department",
        "slug" => "governmentDepartment"
    ],
    "privateLimitedCompany" => [
        "key" => "2",
        "name" => "Private Limited Company",
        "slug" => "privateLimitedCompany"
    ],
    "learningInstitution" => [
        "key" => "3",
        "name" => "Learning Institution",
        "slug" => "learningInstitution"
    ],
    "professionalEntities" => [
        "key" => "4",
        "name" => "Professional Entities",
        "slug" => "professionalEntities"
    ],
    "soleProprietorship" => [
        "key" => "5",
        "name" => "SoleProprietorship",
        "slug" => "soleProprietorship"
    ],
    "trust" => [
        "key" => "6",
        "name" => "Trust",
        "slug" => "trust"
    ],
    "welfareGroups" => [
        "key" => "7",
        "name" => "Welfare Group",
        "slug" => "welfareGroups"
    ],
];

const COMPANY_TYPES = [
    "registered" => [
        "key" => "1",
        "name" => "Registered",
        "slug" => "registered",
        "steps" => 7,
        "duration" => []
    ],
    "nonRegistered" => [
        "key" => "2",
        "name" => "Non Registered",
        "slug" => "nonRegistered",
        "duration" => [
            "longTerm" => [
                "key" => "1",
                "name" => "Long Term",
                "slug" => "longTerm",
                "steps" => 3,
            ],
            "shortTerm" => [
                "key" => "2",
                "name" => "Short Term",
                "slug" => "shortTerm",
                "steps" => 4,
            ]
        ]
    ],
];

const SIGNUP_DURATION = [
    "longTerm" => [
        "key" => "1",
        "name" => "Long Term",
        "slug" => "longTerm"
    ],
    "shortTerm" => [
        "key" => "2",
        "name" => "Short Term",
        "slug" => "shortTerm"
    ],
];

const RADIO_ANSWERS = [
    "yes" => [
        "key" => "1",
        "name" => "Yes",
        "slug" => "yes"
    ],
    "no" => [
        "key" => "2",
        "name" => "No",
        "slug" => "no"
    ],
];

const DOCUMENT_TYPES =  [
    "nationalID" => [
        "key" => "1",
        "name" => "National ID",
        "slug" => "nationalID"
    ],
    "passportDocument" => [
        "key" => "2",
        "name" => "Passport Document",
        "slug" => "passport"
    ],
    "alienCard" => [
        "key" => "3",
        "name" => "Alien Card",
        "slug" => "alienCard"
    ],
    "hudumaCard" => [
        "key" => "4",
        "name" => "Huduma Card",
        "slug" => "hudumaCard"
    ]
];

const REVENUES = [
    "noProcessing" => [
        "key" => "1",
        "name" => "Haven't Started processing yet",
        "slug" => ""
    ],
    "<100k" => [
        "key" => "2",
        "name" => "Less than $100000",
        "slug" => ""
    ],
    "100kTo250K" => [
        "key" => "3",
        "name" => "$100000 to $250000",
        "slug" => ""
    ],
    "250kTo500k" => [
        "key" => "4",
        "name" => "$250000 to $500000",
        "slug" => ""
    ],
    "500kTo1M" => [
        "key" => "5",
        "name" => "$500000 to $1000000",
        "slug" => ""
    ],
    ">1M" => [
        "key" => "6",
        "name" => "More than $1000000",
        "slug" => ""
    ],
];

const SHORT_TERM_BUSINESSES = [
    "education" => [
        "key" => "1",
        "name" => "Education",
        "slug" => "education"
    ],
    "fundRaising" => [
        "key" => "2",
        "name" => "Fund Raising",
        "slug" => "fundRaising"
    ],
    "funeral" => [
        "key" => "3",
        "name" => "Funeral",
        "slug" => "funeral"
    ],
    "medical" => [
        "key" => "4",
        "name" => "Medical",
        "slug" => "medical"
    ],
    "wedding" => [
        "key" => "5",
        "name" => "Wedding",
        "slug" => "wedding"
    ],
];

const SHAREHOLDER_TYPE =  [
    "shareholder" => [
        "key" => "1",
        "name" => "Shareholder",
        "slug" => "shareholder"
    ],
    "partner" => [
        "key" => "2",
        "name" => "Partner",
        "slug" => "partner"
    ],
    "director" => [
        "key" => "3",
        "name" => "UltimateOwner",
        "slug" => "director"
    ],
    "others" => [
        "key" => "4",
        "name" => "Others",
        "slug" => "others"
    ]
];

const OTP_CHANNELS = [
    "email" => [
        "slug" => "email",
        "status" => true
    ],
    "phone" => [
        "slug" => "phone",
        "status" => true
    ],
];




