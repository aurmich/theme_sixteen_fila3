<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
<<<<<<< HEAD
    'accepted' => 'The :attribute rmust be accepted.',
=======
    'accepted' => 'The :attribute must be accepted.',
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
<<<<<<< HEAD
    'alpha_dash' => 'The :attribute may only contain letters, numbers, and dashes.',
=======
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
=======
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'accepted_if' => 'The :attribute must be accepted when :other is :value.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute must only contain letters.',
    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute must only contain letters and numbers.',
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
<<<<<<< HEAD
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
<<<<<<< HEAD
=======
    'date_equals' => 'The :attribute must be a date equal to :date.',
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    'date_format' => 'The :attribute does not match the format :format.',
=======
        'array' => 'The :attribute must have between :min and :max items.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute must be between :min and :max.',
        'string' => 'The :attribute must be between :min and :max characters.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'declined' => 'The :attribute must be declined.',
    'declined_if' => 'The :attribute must be declined when :other is :value.',
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
<<<<<<< HEAD
    'email' => 'The :attribute must be a valid email address.',
<<<<<<< HEAD
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field is required.',
=======
    'ends_with' => 'The :attribute must end with one of the following: :values',
=======
    'doesnt_end_with' => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute may not start with one of the following: :values.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
<<<<<<< HEAD
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
=======
        'array' => 'The :attribute must have more than :value items.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string' => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute must have :value items or more.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
    ],
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
<<<<<<< HEAD
<<<<<<< HEAD
    'json' => 'The :attribute must be a valid JSON string.',
=======
=======
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
<<<<<<< HEAD
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
<<<<<<< HEAD
=======
    'not_regex' => 'The :attribute format is invalid.',
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
<<<<<<< HEAD
    'required_with_all' => 'The :attribute field is required when :values is present.',
=======
    'required_with_all' => 'The :attribute field is required when :values are present.',
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
=======
        'array' => 'The :attribute must have less than :value items.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
        'string' => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute must not have more than :value items.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'array' => 'The :attribute must not have more than :max items.',
        'file' => 'The :attribute must not be greater than :max kilobytes.',
        'numeric' => 'The :attribute must not be greater than :max.',
        'string' => 'The :attribute must not be greater than :max characters.',
    ],
    'max_digits' => 'The :attribute must not have more than :max digits.',
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute must have at least :min items.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'min_digits' => 'The :attribute must have at least :min digits.',
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => [
        'letters' => 'The :attribute must contain at least one letter.',
        'mixed' => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => 'The :attribute must contain at least one number.',
        'symbols' => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
<<<<<<< HEAD
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
<<<<<<< HEAD
=======
    'starts_with' => 'The :attribute must start with one of the following: :values',
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
<<<<<<< HEAD
=======
    'uuid' => 'The :attribute must be a valid UUID.',
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
=======
        'array' => 'The :attribute must contain :size items.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
        'string' => 'The :attribute must be :size characters.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
<<<<<<< HEAD
    'attributes' => [
<<<<<<< HEAD
        'backend' => [
            'alertSetting' => [
                'disable_email_alert' => 'Check if want to disable email alert notification?',
                'disable_sound' => 'Check if want to disable sound alert?',
                'email_address' => 'Email',
                'email' => 'Email',
            ],
            'deliveryCharge' => [
                'distance_unit' => 'Distance Unit',
            ],
            'cookingReference' => [
                'status' => 'Status',
            ],
            'voucher' => [
                'addoncat' => 'Add On Category',
                'name' => 'Name',
                'voucher_type' => 'Status',
                'discount' => 'Discount',
                'expiry_date' => 'Expiry Date',
                'applicable_to_merchant' => 'Applicable To Restaurant',
                'use_only_once' => 'Use Only Once',
            ],
            'takeaway' => [
                'smsBroadCast' => [
                    'send_to_all' => 'Send to All Customer',
                    'send_to_paid_customer' => 'Send to Customer Who already buy your products',
                    'send_to_custom' => 'Send to specific mobile numbers',
                    'message' => 'SMS Message',
                ],
                'tableBooking' => [
                    'number_guests' => 'Number Of Guests',
                    'date_of_booking' => 'Booking Date',
                    'person_name' => 'Name',
                    'time_booked' => 'Booking Time',
                    'person_email' => 'Email',
                    'person_mobile' => 'Mobile',
                    'person_comments' => 'Your Instructions',
                    'send_email' => 'Send Email Confirmation?',
                    'message' => 'Message To Client',
                    'status' => 'Status',
                ],
                'tableBookingSetting' => [
                    'monday' => 'Monday',
                    'tuesday' => 'Tuesday',
                    'wednesday' => 'Wednesday',
                    'thursday' => 'Thursday',
                    'friday' => 'Friday',
                    'saturday' => 'Saturday',
                    'sunday' => 'Sunday',
                    'is_disabled_booking' => 'Disabled Table Booking?',
                    'is_booking_same_day' => 'Accept booking same day?',
                    'fully_booked_message' => 'Fully booked message',
                    'is_disabled_alert_notification' => 'Disabled Alert Notification?',
                    'email_address_receiver' => 'Email',
                    'subject' => 'Subject',
                    'email_sender' => 'Sender Email',
                    'email_subject' => 'Email Subject',
                ],
                'merchant_setting' => [
                    'logo' => 'Restaurant Logo',
                    'header_image' => 'Restaurant Header/Background',
                    'enable_order_verification' => 'Enabled Order SMS Verification',
                    'order_sms_code_waiting' => 'Customer can request sms code every',
                    'food_hide' => 'Hide',
                    'food_disable' => 'Disable',
                    'disable_food_gallery' => 'Disable Food Gallery',
                    'merchant_active_menu_default' => 'Default Menu',
                    'merchant_active_menu_1' => 'Activate Menu 1',
                    'merchant_active_menu_2' => 'Activate Menu 2',
                    'merchant_close_store' => 'Close Store?',
                    'merchant_show_time' => 'Show Restaurant Current Time?',
                    'merchant_disable_ordering' => 'Disabled Ordering?',
                    'website' => 'Website address',
                    'merchant_enable_voucher' => 'Enabled Voucher?',
                    'delivery_time_required' => 'Make Delivery Time Required?',
                    'disable_credit_card_payment' => 'Disabled Offline Credit Card Payment?',
                    'disable_cash_on_delivery' => 'Disabled Cash On delivery?',
                    'min_order_delivery_purchase_amount' => 'Minimum Purchase Amount',
                    'max_order_delivery_purchase_amount' => 'Maximum Purchase Amount',
                    'min_order_pickup_purchase_amount' => 'Minimum Purchase Amount',
                    'max_order_pickup_purchase_amount' => 'Maximum Purchase Amount.',
                    'packaging_charge' => 'Packaging Charge',
                    'packaging_incremental' => 'Packaging Incremental?',
                    'tax' => 'Tax',
                    'delivery_charges' => 'Delivery Charges',
                    'apply_tax_to_delivery_charges' => 'Do not apply tax to delivery charges',
                    'delivery_estimate_time' => 'Delivery Estimation',
                    'delivery_distance' => 'Delivery Distance Covered',
                    'enable_tip' => 'Enabled Tip',
                    'default_tip' => 'Default Tip',
                    'time_zone' => 'Time Zone',
                    'monday_start_time' => 'Monday Start Time',
                    'tuesday_start_time' => 'Tuesday Start Time',
                    'wednesday_start_time' => 'Wednesday Start Time',
                    'monday_end_time' => 'Monday End Time',
                    'tuesday_end_time' => 'Tuesday End Time',
                    'wednesday_end_time' => 'Wednesday End Time',
                    'thursday_start_time' => 'Thursday Start Time',
                    'thursday_end_time' => 'Thursday End Time',
                    'friday_start_time' => 'Friday Start Time',
                    'friday_end_time' => 'Friday End Time',
                    'saturday_start_time' => 'Saturday Start Time',
                    'saturday_end_time' => 'Saturday End Time',
                    'sunday_start_time' => 'Sunday Start Time',
                    'sunday_end_time' => 'Sunday End Time',
                    'accept_preorder' => 'Accept Pre-orders',
                    'close_message' => 'Close Message',
                ],
                'smsTransaction' => [
                    'merchant_id' => 'Restaurant Name',
                    'credits' => 'SMS Credits',
                    'status' => 'Status',
                    'sms_package_id' => 'Sms Package',
                    'paid_by' => 'Paid By',
                ],
                'smsPackage' => [
                    'title' => 'Title',
                    'description' => 'Description',
                    'price' => 'Price',
                    'dis_price' => 'Discount',
                    'credit_limit' => 'SMS Credit Limit',
                    'status' => 'Status',
                    'created_at' => 'Created At',
                ],
                'deliveryCharge' => [
                    'min_distance' => 'Minimum Distance',
                    'max_distance' => 'Maximum Distance',
                    'distance_unit' => 'Distance Unit',
                    'price' => 'Price',
                    'free_delivery_above_sub_total' => 'Free Delivery Above Sub Total',
                    'are_rates_enabled' => 'Enabled Table Rates',
                ],
                'offer' => [
                    'offer_percentage' => 'Offer Percentage',
                    'order_over' => 'Order Over',
                    'valid_from' => 'Valid From',
                    'valid_to' => 'Valid To',
                    'status' => 'Offer Status',
                ],
                'cuisine' => [
                    'name' => 'Cuisine Name',
                    'update' => 'Update Cuisine',
                ],
                'currency' => [
                    'currency_code' => 'Currency Code',
                    'currency_desc' => 'Currency Description',
                    'convertion_rate' => 'Currency Rate',
                    'currency_symbol' => 'Currency Symbol',
                    'created_at' => 'Created At',
                ],
                'dish' => [
                    'name' => 'Dish Name',
                    'status' => 'Status',
                    'icon' => 'Upload Icon',
                    'cat_name' => 'Category Name',
                ],
                'ingredient' => [
                    'ing_name' => 'Ingredient Name',
                    'status' => 'Ingredient Status',
                    'edit' => 'Edit Ingredient',
                ],
                'merchant' => [
                    'resturant_slug' => 'Restaurant Slug',
                    'resturant_name' => 'Restaurant Name',
                    'resturant_phone' => 'Restaurant Phone',
                    'contact_name' => 'Contact Name',
                    'contact_email' => 'Contact Email',
                    'country' => 'Country',
                    'street_address' => 'Address',
                    'city' => 'City',
                    'postcode' => 'Post code/Zip Code',
                    'state_region' => 'State/Region',
                    'pickup_delivery' => 'Pickup Or Delivery',
                    'publish_merchant' => 'Publish Restaurant',
                    'status' => 'Status',
                    'email' => 'Email',
                    'password' => 'Password',
                    'update_password' => 'Live blank if not want to Update',
                    'package_id' => 'Package Id',
                    'package_price' => 'Package Price',
                    'is_featured' => 'Featured Restaurant',
                    'is_enable_comission' => 'Enable Commission',
                    'order_comission' => 'Commission On Orders',
                    'comission_amount' => 'Commission Amount',
                    'is_disable_cashdelivery' => 'Disable Cash On delivery?',
                    'is_disable_offlinecc' => 'Disable Offline Credit Card Payment?',
                    'is_disable_payondelivery' => 'Disable Pay On Delivery?',
                    'google_lat' => 'Google Map Latitude',
                    'google_lng' => 'Google Map Longitude',
                    'created_at' => 'Created At',
                    'last_updated' => 'Last Updated',
                    'deleted_at' => 'Deleted At',
                    'package_expire' => 'Package Expire',
                    'cuisine' => 'Cuisine',
                ],
                'rating' => [
                    'range1' => 'Range 1',
                    'range2' => 'Range 2',
                    'rating' => 'Rating',
                ],
                'cookingReference' => [
                    'name' => 'Cooking Ref. name',
                    'status' => 'Status',
                ],
                'cms' => [
                    'page_name' => 'Page Name',
                    'page_type' => 'Page Type',
                    'page_title' => 'Page Title',
                    'page_description' => 'Page Description',
                    'meta_title' => 'Meta Title',
                    'meta_description' => 'Meta Description',
                    'meta_keywords' => 'Meta Keywords',
                    'page_status' => 'Page Status',
                ],
                'addOnItem' => [
                    'addon_item_name' => 'AddOn Product',
                    'addon_desc' => 'Description',
                    'addoncat' => 'AddOn Category',
                    'status' => 'Status',
                    'addon_price' => 'Price',
                    'addon_item_image' => 'Featured Image',
                ],
                'addOnCategory' => [
                    'addon_cat_item_name' => 'AddOn Name',
                    'addon_cat_desc' => 'Description',
                    'status' => 'Status',
                ],
                'sponserd' => [
                    'create' => 'Create Sponsored',
                    'merchant_id' => 'Restaurant Name',
                    'expiry_date' => 'Expiry Date',
                ],
                'package' => [
                    'package_title' => 'Title',
                    'package_desc' => 'Description',
                    'package_price' => 'Price',
                    'package_dis_price' => 'Package Discount Price',
                    'package_type' => 'Type',
                    'package_expiry' => 'Expiration (no. of days or Year)',
                    'package_usage' => 'Usage',
                    'package_foodcanadd' => 'Number of Food Product Can Add',
                    'package_limitbysell' => 'Limit Restaurant by sale',
                    'package_status' => 'Status',
                ],
                'productSize' => [
                    'size_name' => 'Size Name',
                    'status' => 'Status',
                ],
                'item' => [
                    'item_name' => 'Food Product Name',
                    'item_desc' => 'Description',
                    'featured_image' => 'Feature Image',
                    'item_price' => 'Product Price',
                    'cat_id' => 'Food Category',
                    'cooking_reference' => 'Cooking Reference',
                    'dish_ref' => 'Dish',
                    'points_earned' => 'Points Earned',
                    'is_taxable' => 'Tax',
                    'is_disable_pointearn' => 'Is Disable Pointearn',
                    'ingredient_ref' => 'Ingredient Reference',
                    'status' => 'Status',
                    'apply_tax' => 'Apply Tax',
                    'number_of_points_earned' => 'Number Of Points Earned',
                    'disable_pointearn' => 'Disable Pointearn',
                    'gallery_img' => 'Gallery Image',
                    'gallery_disable' => 'Gallery Disabled?',
                ],
                'orderStatus' => [
                    'order_status' => 'Order Status',
                ],
                'smsAlert' => [
                    'enable_alerts' => 'Enabled SMS alert?',
                    'merchant_phone' => 'Notify Mobile Number',
                    'message' => 'Send Notification Message to Restaurant',
                    'customer_phones' => 'Send Notification Message To Customer',
                    'order_status_phones' => 'Send Notification Message When Order Status Change',
                ],
                'dishes' => [
                    'dish_name' => 'Dish Name',
                    'type' => 'Type',
                ],
                'category' => [
                    'cat_name' => 'Food Category Name',
                    'cat_desc' => 'Description',
                    'status' => 'Status',
                    'cat_image' => 'Featured Image',
                    'dish_item' => 'Dish',
                    'addon_item_image' => 'Product Image',
                ],
            ],
            'access' => [
                'permissions' => [
                    'associated_roles' => 'Associated Roles',
                    'dependencies' => 'Dependencies',
                    'display_name' => 'Display Name',
                    'group' => 'Group',
                    'group_sort' => 'Group Sort',
                    'groups' => [
                        'name' => 'Group Name',
                    ],
                    'name' => 'Name',
                    'system' => 'System?',
                ],
                'roles' => [
                    'associated_permissions' => 'Associated Permissions',
                    'name' => 'Name',
                    'sort' => 'Sort',
                ],
                'users' => [
                    'active' => 'Active',
                    'associated_roles' => 'Associated Roles',
                    'confirmed' => 'Confirmed',
                    'email' => 'Email Address',
                    'name' => 'Name',
                    'other_permissions' => 'Other Permissions',
                    'password' => 'Password',
                    'password_confirmation' => 'Password Confirmation',
                    'send_confirmation_email' => 'Send Confirmation E-mail',
                ],
            ],
        ],
        'frontend' => [
            'email' => 'E-mail Address',
            'name' => 'Name',
            'password' => 'Password',
            'password_confirmation' => 'Password Confirmation',
            'old_password' => 'Old Password',
            'new_password' => 'New Password',
            'new_password_confirmation' => 'New Password Confirmation',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zip_code' => 'Zip code',
            'location_name' => 'Location Name',
            'Address_nick' => 'Address Nick',
            'country' => 'Country',
            'default' => 'Default',
            'image' => 'Choose file',
            'upload_image' => 'Upload your file',
            'phone' => 'Phone Number',
            'detail' => 'Detail',
            'state_region' => 'State Region',
            'google_lat' => 'Google Latitude',
            'google_lng' => 'Google Longitude',
            'street_address' => 'Street Address',
            'postcode' => 'Post Code',
            'order_id' => 'Order ID',
            'payment_method' => 'Payment Method',
            'date' => 'Date',
            'product' => 'Product',
            'merchant' => 'Restaurant',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'total_price' => 'Total Price',
            'card_name' => 'Card Name',
            'credit_card_number' => 'Credit Card Number',
            'exp_month' => 'Exp. Month',
            'exp_year' => 'Exp. Year',
            'billing_address' => 'Billing Address',
            'cvv' => 'CVV',
            'actions' => 'Actions',
        ],
=======
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
    ],
=======

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
];
