PGDMP                         x         	   db_ec_joy    12.3    12.3 �   N           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            O           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            P           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            Q           1262    16394 	   db_ec_joy    DATABASE     �   CREATE DATABASE db_ec_joy WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_United States.1252' LC_CTYPE = 'English_United States.1252';
    DROP DATABASE db_ec_joy;
                postgres    false            R           0    0    DATABASE db_ec_joy    COMMENT     (   COMMENT ON DATABASE db_ec_joy IS 'Joy';
                   postgres    false    3921            *           1259    17707    doctrine_migration_versions    TABLE     a   CREATE TABLE public.doctrine_migration_versions (
    version character varying(255) NOT NULL
);
 /   DROP TABLE public.doctrine_migration_versions;
       public         heap    postgres    false            �            1259    16448    dtb_authority_role    TABLE     J  CREATE TABLE public.dtb_authority_role (
    id integer NOT NULL,
    authority_id smallint,
    creator_id integer,
    deny_url character varying(4000) NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 &   DROP TABLE public.dtb_authority_role;
       public         heap    postgres    false            S           0    0 %   COLUMN dtb_authority_role.create_date    COMMENT     S   COMMENT ON COLUMN public.dtb_authority_role.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    205            T           0    0 %   COLUMN dtb_authority_role.update_date    COMMENT     S   COMMENT ON COLUMN public.dtb_authority_role.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    205            �            1259    16446    dtb_authority_role_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_authority_role_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.dtb_authority_role_id_seq;
       public          postgres    false    205            U           0    0    dtb_authority_role_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.dtb_authority_role_id_seq OWNED BY public.dtb_authority_role.id;
          public          postgres    false    204            �            1259    16461    dtb_base_info    TABLE     �  CREATE TABLE public.dtb_base_info (
    id integer NOT NULL,
    country_id smallint,
    pref_id smallint,
    company_name character varying(255) DEFAULT NULL::character varying,
    company_kana character varying(255) DEFAULT NULL::character varying,
    postal_code character varying(8) DEFAULT NULL::character varying,
    addr01 character varying(255) DEFAULT NULL::character varying,
    addr02 character varying(255) DEFAULT NULL::character varying,
    phone_number character varying(14) DEFAULT NULL::character varying,
    business_hour character varying(255) DEFAULT NULL::character varying,
    email01 character varying(255) DEFAULT NULL::character varying,
    email02 character varying(255) DEFAULT NULL::character varying,
    email03 character varying(255) DEFAULT NULL::character varying,
    email04 character varying(255) DEFAULT NULL::character varying,
    shop_name character varying(255) DEFAULT NULL::character varying,
    shop_kana character varying(255) DEFAULT NULL::character varying,
    shop_name_eng character varying(255) DEFAULT NULL::character varying,
    update_date timestamp(0) with time zone NOT NULL,
    good_traded character varying(4000) DEFAULT NULL::character varying,
    message character varying(4000) DEFAULT NULL::character varying,
    delivery_free_amount numeric(12,2) DEFAULT NULL::numeric,
    delivery_free_quantity integer,
    option_mypage_order_status_display boolean DEFAULT true NOT NULL,
    option_nostock_hidden boolean DEFAULT false NOT NULL,
    option_favorite_product boolean DEFAULT true NOT NULL,
    option_product_delivery_fee boolean DEFAULT false NOT NULL,
    option_product_tax_rule boolean DEFAULT false NOT NULL,
    option_customer_activate boolean DEFAULT true NOT NULL,
    option_remember_me boolean DEFAULT true NOT NULL,
    authentication_key character varying(255) DEFAULT NULL::character varying,
    php_path character varying(255) DEFAULT NULL::character varying,
    option_point boolean DEFAULT true NOT NULL,
    basic_point_rate numeric(10,0) DEFAULT '1'::numeric,
    point_conversion_rate numeric(10,0) DEFAULT '1'::numeric,
    discriminator_type character varying(255) NOT NULL
);
 !   DROP TABLE public.dtb_base_info;
       public         heap    postgres    false            V           0    0     COLUMN dtb_base_info.update_date    COMMENT     N   COMMENT ON COLUMN public.dtb_base_info.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    207            �            1259    16459    dtb_base_info_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_base_info_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.dtb_base_info_id_seq;
       public          postgres    false    207            W           0    0    dtb_base_info_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.dtb_base_info_id_seq OWNED BY public.dtb_base_info.id;
          public          postgres    false    206            �            1259    16503 	   dtb_block    TABLE     �  CREATE TABLE public.dtb_block (
    id integer NOT NULL,
    device_type_id smallint,
    block_name character varying(255) DEFAULT NULL::character varying,
    file_name character varying(255) NOT NULL,
    use_controller boolean DEFAULT false NOT NULL,
    deletable boolean DEFAULT true NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.dtb_block;
       public         heap    postgres    false            X           0    0    COLUMN dtb_block.create_date    COMMENT     J   COMMENT ON COLUMN public.dtb_block.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    209            Y           0    0    COLUMN dtb_block.update_date    COMMENT     J   COMMENT ON COLUMN public.dtb_block.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    209            �            1259    16501    dtb_block_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_block_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.dtb_block_id_seq;
       public          postgres    false    209            Z           0    0    dtb_block_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.dtb_block_id_seq OWNED BY public.dtb_block.id;
          public          postgres    false    208            �            1259    16517    dtb_block_position    TABLE     �   CREATE TABLE public.dtb_block_position (
    section integer NOT NULL,
    block_id integer NOT NULL,
    layout_id integer NOT NULL,
    block_row integer,
    discriminator_type character varying(255) NOT NULL
);
 &   DROP TABLE public.dtb_block_position;
       public         heap    postgres    false            �            1259    16526    dtb_cart    TABLE     �  CREATE TABLE public.dtb_cart (
    id integer NOT NULL,
    customer_id integer,
    cart_key character varying(255) DEFAULT NULL::character varying,
    pre_order_id character varying(255) DEFAULT NULL::character varying,
    total_price numeric(12,2) DEFAULT '0'::numeric NOT NULL,
    delivery_fee_total numeric(12,2) DEFAULT '0'::numeric NOT NULL,
    sort_no smallint,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    add_point numeric(12,0) DEFAULT '0'::numeric NOT NULL,
    use_point numeric(12,0) DEFAULT '0'::numeric NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.dtb_cart;
       public         heap    postgres    false            [           0    0    COLUMN dtb_cart.create_date    COMMENT     I   COMMENT ON COLUMN public.dtb_cart.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    212            \           0    0    COLUMN dtb_cart.update_date    COMMENT     I   COMMENT ON COLUMN public.dtb_cart.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    212            �            1259    16524    dtb_cart_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_cart_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.dtb_cart_id_seq;
       public          postgres    false    212            ]           0    0    dtb_cart_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.dtb_cart_id_seq OWNED BY public.dtb_cart.id;
          public          postgres    false    211            �            1259    16546    dtb_cart_item    TABLE     O  CREATE TABLE public.dtb_cart_item (
    id integer NOT NULL,
    product_class_id integer,
    cart_id integer,
    price numeric(12,2) DEFAULT '0'::numeric NOT NULL,
    quantity numeric(10,0) DEFAULT '0'::numeric NOT NULL,
    point_rate numeric(10,0) DEFAULT NULL::numeric,
    discriminator_type character varying(255) NOT NULL
);
 !   DROP TABLE public.dtb_cart_item;
       public         heap    postgres    false            �            1259    16544    dtb_cart_item_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_cart_item_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.dtb_cart_item_id_seq;
       public          postgres    false    214            ^           0    0    dtb_cart_item_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.dtb_cart_item_id_seq OWNED BY public.dtb_cart_item.id;
          public          postgres    false    213            �            1259    16559    dtb_category    TABLE     �  CREATE TABLE public.dtb_category (
    id integer NOT NULL,
    parent_category_id integer,
    creator_id integer,
    category_name character varying(255) NOT NULL,
    hierarchy integer NOT NULL,
    sort_no integer NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
     DROP TABLE public.dtb_category;
       public         heap    postgres    false            _           0    0    COLUMN dtb_category.create_date    COMMENT     M   COMMENT ON COLUMN public.dtb_category.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    216            `           0    0    COLUMN dtb_category.update_date    COMMENT     M   COMMENT ON COLUMN public.dtb_category.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    216            �            1259    16557    dtb_category_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_category_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.dtb_category_id_seq;
       public          postgres    false    216            a           0    0    dtb_category_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.dtb_category_id_seq OWNED BY public.dtb_category.id;
          public          postgres    false    215            �            1259    16572    dtb_class_category    TABLE     �  CREATE TABLE public.dtb_class_category (
    id integer NOT NULL,
    class_name_id integer,
    creator_id integer,
    backend_name character varying(255) DEFAULT NULL::character varying,
    name character varying(255) NOT NULL,
    sort_no integer NOT NULL,
    visible boolean DEFAULT true NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 &   DROP TABLE public.dtb_class_category;
       public         heap    postgres    false            b           0    0 %   COLUMN dtb_class_category.create_date    COMMENT     S   COMMENT ON COLUMN public.dtb_class_category.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    218            c           0    0 %   COLUMN dtb_class_category.update_date    COMMENT     S   COMMENT ON COLUMN public.dtb_class_category.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    218            �            1259    16570    dtb_class_category_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_class_category_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 0   DROP SEQUENCE public.dtb_class_category_id_seq;
       public          postgres    false    218            d           0    0    dtb_class_category_id_seq    SEQUENCE OWNED BY     W   ALTER SEQUENCE public.dtb_class_category_id_seq OWNED BY public.dtb_class_category.id;
          public          postgres    false    217            �            1259    16587    dtb_class_name    TABLE     �  CREATE TABLE public.dtb_class_name (
    id integer NOT NULL,
    creator_id integer,
    backend_name character varying(255) DEFAULT NULL::character varying,
    name character varying(255) NOT NULL,
    sort_no integer NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 "   DROP TABLE public.dtb_class_name;
       public         heap    postgres    false            e           0    0 !   COLUMN dtb_class_name.create_date    COMMENT     O   COMMENT ON COLUMN public.dtb_class_name.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    220            f           0    0 !   COLUMN dtb_class_name.update_date    COMMENT     O   COMMENT ON COLUMN public.dtb_class_name.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    220            �            1259    16585    dtb_class_name_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_class_name_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.dtb_class_name_id_seq;
       public          postgres    false    220            g           0    0    dtb_class_name_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.dtb_class_name_id_seq OWNED BY public.dtb_class_name.id;
          public          postgres    false    219            �            1259    16600    dtb_csv    TABLE     :  CREATE TABLE public.dtb_csv (
    id integer NOT NULL,
    csv_type_id smallint,
    creator_id integer,
    entity_name character varying(255) NOT NULL,
    field_name character varying(255) NOT NULL,
    reference_field_name character varying(255) DEFAULT NULL::character varying,
    disp_name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    enabled boolean DEFAULT true NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.dtb_csv;
       public         heap    postgres    false            h           0    0    COLUMN dtb_csv.create_date    COMMENT     H   COMMENT ON COLUMN public.dtb_csv.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    222            i           0    0    COLUMN dtb_csv.update_date    COMMENT     H   COMMENT ON COLUMN public.dtb_csv.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    222            �            1259    16598    dtb_csv_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_csv_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.dtb_csv_id_seq;
       public          postgres    false    222            j           0    0    dtb_csv_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.dtb_csv_id_seq OWNED BY public.dtb_csv.id;
          public          postgres    false    221            �            1259    16615    dtb_customer    TABLE     �  CREATE TABLE public.dtb_customer (
    id integer NOT NULL,
    customer_status_id smallint,
    sex_id smallint,
    job_id smallint,
    country_id smallint,
    pref_id smallint,
    name01 character varying(255) NOT NULL,
    name02 character varying(255) NOT NULL,
    kana01 character varying(255) DEFAULT NULL::character varying,
    kana02 character varying(255) DEFAULT NULL::character varying,
    company_name character varying(255) DEFAULT NULL::character varying,
    postal_code character varying(8) DEFAULT NULL::character varying,
    addr01 character varying(255) DEFAULT NULL::character varying,
    addr02 character varying(255) DEFAULT NULL::character varying,
    email character varying(255) NOT NULL,
    phone_number character varying(14) DEFAULT NULL::character varying,
    birth timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    password character varying(255) NOT NULL,
    salt character varying(255) DEFAULT NULL::character varying,
    secret_key character varying(255) NOT NULL,
    first_buy_date timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    last_buy_date timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    buy_times numeric(10,0) DEFAULT '0'::numeric,
    buy_total numeric(12,2) DEFAULT '0'::numeric,
    note character varying(4000) DEFAULT NULL::character varying,
    reset_key character varying(255) DEFAULT NULL::character varying,
    reset_expire timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    point numeric(12,0) DEFAULT '0'::numeric NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL,
    sample_payment_cards smallint
);
     DROP TABLE public.dtb_customer;
       public         heap    postgres    false            k           0    0    COLUMN dtb_customer.birth    COMMENT     G   COMMENT ON COLUMN public.dtb_customer.birth IS '(DC2Type:datetimetz)';
          public          postgres    false    224            l           0    0 "   COLUMN dtb_customer.first_buy_date    COMMENT     P   COMMENT ON COLUMN public.dtb_customer.first_buy_date IS '(DC2Type:datetimetz)';
          public          postgres    false    224            m           0    0 !   COLUMN dtb_customer.last_buy_date    COMMENT     O   COMMENT ON COLUMN public.dtb_customer.last_buy_date IS '(DC2Type:datetimetz)';
          public          postgres    false    224            n           0    0     COLUMN dtb_customer.reset_expire    COMMENT     N   COMMENT ON COLUMN public.dtb_customer.reset_expire IS '(DC2Type:datetimetz)';
          public          postgres    false    224            o           0    0    COLUMN dtb_customer.create_date    COMMENT     M   COMMENT ON COLUMN public.dtb_customer.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    224            p           0    0    COLUMN dtb_customer.update_date    COMMENT     M   COMMENT ON COLUMN public.dtb_customer.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    224            �            1259    16655    dtb_customer_address    TABLE     m  CREATE TABLE public.dtb_customer_address (
    id integer NOT NULL,
    customer_id integer,
    country_id smallint,
    pref_id smallint,
    name01 character varying(255) NOT NULL,
    name02 character varying(255) NOT NULL,
    kana01 character varying(255) DEFAULT NULL::character varying,
    kana02 character varying(255) DEFAULT NULL::character varying,
    company_name character varying(255) DEFAULT NULL::character varying,
    postal_code character varying(8) DEFAULT NULL::character varying,
    addr01 character varying(255) DEFAULT NULL::character varying,
    addr02 character varying(255) DEFAULT NULL::character varying,
    phone_number character varying(14) DEFAULT NULL::character varying,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 (   DROP TABLE public.dtb_customer_address;
       public         heap    postgres    false            q           0    0 '   COLUMN dtb_customer_address.create_date    COMMENT     U   COMMENT ON COLUMN public.dtb_customer_address.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    226            r           0    0 '   COLUMN dtb_customer_address.update_date    COMMENT     U   COMMENT ON COLUMN public.dtb_customer_address.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    226            �            1259    16653    dtb_customer_address_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_customer_address_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 2   DROP SEQUENCE public.dtb_customer_address_id_seq;
       public          postgres    false    226            s           0    0    dtb_customer_address_id_seq    SEQUENCE OWNED BY     [   ALTER SEQUENCE public.dtb_customer_address_id_seq OWNED BY public.dtb_customer_address.id;
          public          postgres    false    225            �            1259    16676    dtb_customer_favorite_product    TABLE     $  CREATE TABLE public.dtb_customer_favorite_product (
    id integer NOT NULL,
    customer_id integer,
    product_id integer,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 1   DROP TABLE public.dtb_customer_favorite_product;
       public         heap    postgres    false            t           0    0 0   COLUMN dtb_customer_favorite_product.create_date    COMMENT     ^   COMMENT ON COLUMN public.dtb_customer_favorite_product.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    228            u           0    0 0   COLUMN dtb_customer_favorite_product.update_date    COMMENT     ^   COMMENT ON COLUMN public.dtb_customer_favorite_product.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    228            �            1259    16674 $   dtb_customer_favorite_product_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_customer_favorite_product_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ;   DROP SEQUENCE public.dtb_customer_favorite_product_id_seq;
       public          postgres    false    228            v           0    0 $   dtb_customer_favorite_product_id_seq    SEQUENCE OWNED BY     m   ALTER SEQUENCE public.dtb_customer_favorite_product_id_seq OWNED BY public.dtb_customer_favorite_product.id;
          public          postgres    false    227            �            1259    16613    dtb_customer_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_customer_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.dtb_customer_id_seq;
       public          postgres    false    224            w           0    0    dtb_customer_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.dtb_customer_id_seq OWNED BY public.dtb_customer.id;
          public          postgres    false    223            �            1259    16686    dtb_delivery    TABLE     q  CREATE TABLE public.dtb_delivery (
    id integer NOT NULL,
    creator_id integer,
    sale_type_id smallint,
    name character varying(255) DEFAULT NULL::character varying,
    service_name character varying(255) DEFAULT NULL::character varying,
    description character varying(4000) DEFAULT NULL::character varying,
    confirm_url character varying(4000) DEFAULT NULL::character varying,
    sort_no integer,
    visible boolean DEFAULT true NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
     DROP TABLE public.dtb_delivery;
       public         heap    postgres    false            x           0    0    COLUMN dtb_delivery.create_date    COMMENT     M   COMMENT ON COLUMN public.dtb_delivery.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    230            y           0    0    COLUMN dtb_delivery.update_date    COMMENT     M   COMMENT ON COLUMN public.dtb_delivery.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    230            �            1259    16704    dtb_delivery_duration    TABLE       CREATE TABLE public.dtb_delivery_duration (
    id integer NOT NULL,
    name character varying(255) DEFAULT NULL::character varying,
    duration smallint DEFAULT 0 NOT NULL,
    sort_no integer NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 )   DROP TABLE public.dtb_delivery_duration;
       public         heap    postgres    false            �            1259    16702    dtb_delivery_duration_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_delivery_duration_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.dtb_delivery_duration_id_seq;
       public          postgres    false    232            z           0    0    dtb_delivery_duration_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.dtb_delivery_duration_id_seq OWNED BY public.dtb_delivery_duration.id;
          public          postgres    false    231            �            1259    16717    dtb_delivery_fee    TABLE     �   CREATE TABLE public.dtb_delivery_fee (
    id integer NOT NULL,
    delivery_id integer,
    pref_id smallint,
    fee numeric(12,2) NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 $   DROP TABLE public.dtb_delivery_fee;
       public         heap    postgres    false            �            1259    16715    dtb_delivery_fee_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_delivery_fee_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.dtb_delivery_fee_id_seq;
       public          postgres    false    234            {           0    0    dtb_delivery_fee_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.dtb_delivery_fee_id_seq OWNED BY public.dtb_delivery_fee.id;
          public          postgres    false    233            �            1259    16684    dtb_delivery_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_delivery_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.dtb_delivery_id_seq;
       public          postgres    false    230            |           0    0    dtb_delivery_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.dtb_delivery_id_seq OWNED BY public.dtb_delivery.id;
          public          postgres    false    229            �            1259    16727    dtb_delivery_time    TABLE     }  CREATE TABLE public.dtb_delivery_time (
    id integer NOT NULL,
    delivery_id integer,
    delivery_time character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    visible boolean DEFAULT true NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 %   DROP TABLE public.dtb_delivery_time;
       public         heap    postgres    false            }           0    0 $   COLUMN dtb_delivery_time.create_date    COMMENT     R   COMMENT ON COLUMN public.dtb_delivery_time.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    236            ~           0    0 $   COLUMN dtb_delivery_time.update_date    COMMENT     R   COMMENT ON COLUMN public.dtb_delivery_time.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    236            �            1259    16725    dtb_delivery_time_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_delivery_time_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.dtb_delivery_time_id_seq;
       public          postgres    false    236                       0    0    dtb_delivery_time_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.dtb_delivery_time_id_seq OWNED BY public.dtb_delivery_time.id;
          public          postgres    false    235            �            1259    16740 
   dtb_layout    TABLE     E  CREATE TABLE public.dtb_layout (
    id integer NOT NULL,
    device_type_id smallint,
    layout_name character varying(255) DEFAULT NULL::character varying,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.dtb_layout;
       public         heap    postgres    false            �           0    0    COLUMN dtb_layout.create_date    COMMENT     K   COMMENT ON COLUMN public.dtb_layout.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    238            �           0    0    COLUMN dtb_layout.update_date    COMMENT     K   COMMENT ON COLUMN public.dtb_layout.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    238            �            1259    16738    dtb_layout_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_layout_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.dtb_layout_id_seq;
       public          postgres    false    238            �           0    0    dtb_layout_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.dtb_layout_id_seq OWNED BY public.dtb_layout.id;
          public          postgres    false    237            �            1259    16753    dtb_mail_history    TABLE     p  CREATE TABLE public.dtb_mail_history (
    id integer NOT NULL,
    order_id integer,
    creator_id integer,
    send_date timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    mail_subject character varying(255) DEFAULT NULL::character varying,
    mail_body text,
    mail_html_body text,
    discriminator_type character varying(255) NOT NULL
);
 $   DROP TABLE public.dtb_mail_history;
       public         heap    postgres    false            �           0    0 !   COLUMN dtb_mail_history.send_date    COMMENT     O   COMMENT ON COLUMN public.dtb_mail_history.send_date IS '(DC2Type:datetimetz)';
          public          postgres    false    240            �            1259    16751    dtb_mail_history_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_mail_history_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.dtb_mail_history_id_seq;
       public          postgres    false    240            �           0    0    dtb_mail_history_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.dtb_mail_history_id_seq OWNED BY public.dtb_mail_history.id;
          public          postgres    false    239            �            1259    16768    dtb_mail_template    TABLE     �  CREATE TABLE public.dtb_mail_template (
    id integer NOT NULL,
    creator_id integer,
    name character varying(255) DEFAULT NULL::character varying,
    file_name character varying(255) DEFAULT NULL::character varying,
    mail_subject character varying(255) DEFAULT NULL::character varying,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 %   DROP TABLE public.dtb_mail_template;
       public         heap    postgres    false            �           0    0 $   COLUMN dtb_mail_template.create_date    COMMENT     R   COMMENT ON COLUMN public.dtb_mail_template.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    242            �           0    0 $   COLUMN dtb_mail_template.update_date    COMMENT     R   COMMENT ON COLUMN public.dtb_mail_template.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    242            �            1259    16766    dtb_mail_template_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_mail_template_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.dtb_mail_template_id_seq;
       public          postgres    false    242            �           0    0    dtb_mail_template_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.dtb_mail_template_id_seq OWNED BY public.dtb_mail_template.id;
          public          postgres    false    241            	           1259    16952 
   dtb_member    TABLE     �  CREATE TABLE public.dtb_member (
    id integer NOT NULL,
    work_id smallint,
    authority_id smallint,
    creator_id integer,
    name character varying(255) DEFAULT NULL::character varying,
    department character varying(255) DEFAULT NULL::character varying,
    login_id character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    salt character varying(255) DEFAULT NULL::character varying,
    sort_no smallint NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    login_date timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.dtb_member;
       public         heap    postgres    false            �           0    0    COLUMN dtb_member.create_date    COMMENT     K   COMMENT ON COLUMN public.dtb_member.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    265            �           0    0    COLUMN dtb_member.update_date    COMMENT     K   COMMENT ON COLUMN public.dtb_member.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    265            �           0    0    COLUMN dtb_member.login_date    COMMENT     J   COMMENT ON COLUMN public.dtb_member.login_date IS '(DC2Type:datetimetz)';
          public          postgres    false    265                       1259    16950    dtb_member_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_member_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.dtb_member_id_seq;
       public          postgres    false    265            �           0    0    dtb_member_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.dtb_member_id_seq OWNED BY public.dtb_member.id;
          public          postgres    false    264                       1259    16970    dtb_news    TABLE     (  CREATE TABLE public.dtb_news (
    id integer NOT NULL,
    creator_id integer,
    publish_date timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    title character varying(255) NOT NULL,
    description text,
    url character varying(4000) DEFAULT NULL::character varying,
    link_method boolean DEFAULT false NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    visible boolean DEFAULT true NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.dtb_news;
       public         heap    postgres    false            �           0    0    COLUMN dtb_news.publish_date    COMMENT     J   COMMENT ON COLUMN public.dtb_news.publish_date IS '(DC2Type:datetimetz)';
          public          postgres    false    267            �           0    0    COLUMN dtb_news.create_date    COMMENT     I   COMMENT ON COLUMN public.dtb_news.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    267            �           0    0    COLUMN dtb_news.update_date    COMMENT     I   COMMENT ON COLUMN public.dtb_news.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    267            
           1259    16968    dtb_news_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_news_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.dtb_news_id_seq;
       public          postgres    false    267            �           0    0    dtb_news_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.dtb_news_id_seq OWNED BY public.dtb_news.id;
          public          postgres    false    266            �            1259    16397 	   dtb_order    TABLE     �	  CREATE TABLE public.dtb_order (
    id integer NOT NULL,
    customer_id integer,
    country_id smallint,
    pref_id smallint,
    sex_id smallint,
    job_id smallint,
    payment_id integer,
    device_type_id smallint,
    pre_order_id character varying(255) DEFAULT NULL::character varying,
    order_no character varying(255) DEFAULT NULL::character varying,
    message character varying(4000) DEFAULT NULL::character varying,
    name01 character varying(255) NOT NULL,
    name02 character varying(255) NOT NULL,
    kana01 character varying(255) DEFAULT NULL::character varying,
    kana02 character varying(255) DEFAULT NULL::character varying,
    company_name character varying(255) DEFAULT NULL::character varying,
    email character varying(255) DEFAULT NULL::character varying,
    phone_number character varying(14) DEFAULT NULL::character varying,
    postal_code character varying(8) DEFAULT NULL::character varying,
    addr01 character varying(255) DEFAULT NULL::character varying,
    addr02 character varying(255) DEFAULT NULL::character varying,
    birth timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    subtotal numeric(12,2) DEFAULT '0'::numeric NOT NULL,
    discount numeric(12,2) DEFAULT '0'::numeric NOT NULL,
    delivery_fee_total numeric(12,2) DEFAULT '0'::numeric NOT NULL,
    charge numeric(12,2) DEFAULT '0'::numeric NOT NULL,
    tax numeric(12,2) DEFAULT '0'::numeric NOT NULL,
    total numeric(12,2) DEFAULT '0'::numeric NOT NULL,
    payment_total numeric(12,2) DEFAULT '0'::numeric NOT NULL,
    payment_method character varying(255) DEFAULT NULL::character varying,
    note character varying(4000) DEFAULT NULL::character varying,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    order_date timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    payment_date timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    currency_code character varying(255) DEFAULT NULL::character varying,
    complete_message text,
    complete_mail_message text,
    add_point numeric(12,0) DEFAULT '0'::numeric NOT NULL,
    use_point numeric(12,0) DEFAULT '0'::numeric NOT NULL,
    order_status_id smallint,
    discriminator_type character varying(255) NOT NULL,
    sample_payment_cvs_type_id smallint,
    sample_payment_payment_status_id smallint,
    sample_payment_cvs_payment_status_id smallint,
    sample_payment_token character varying(255) DEFAULT NULL::character varying
);
    DROP TABLE public.dtb_order;
       public         heap    postgres    false            �           0    0    COLUMN dtb_order.birth    COMMENT     D   COMMENT ON COLUMN public.dtb_order.birth IS '(DC2Type:datetimetz)';
          public          postgres    false    203            �           0    0    COLUMN dtb_order.create_date    COMMENT     J   COMMENT ON COLUMN public.dtb_order.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    203            �           0    0    COLUMN dtb_order.update_date    COMMENT     J   COMMENT ON COLUMN public.dtb_order.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    203            �           0    0    COLUMN dtb_order.order_date    COMMENT     I   COMMENT ON COLUMN public.dtb_order.order_date IS '(DC2Type:datetimetz)';
          public          postgres    false    203            �           0    0    COLUMN dtb_order.payment_date    COMMENT     K   COMMENT ON COLUMN public.dtb_order.payment_date IS '(DC2Type:datetimetz)';
          public          postgres    false    203            �            1259    16395    dtb_order_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_order_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.dtb_order_id_seq;
       public          postgres    false    203            �           0    0    dtb_order_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.dtb_order_id_seq OWNED BY public.dtb_order.id;
          public          postgres    false    202                       1259    16986    dtb_order_item    TABLE     �  CREATE TABLE public.dtb_order_item (
    id integer NOT NULL,
    order_id integer,
    product_id integer,
    product_class_id integer,
    shipping_id integer,
    rounding_type_id smallint,
    tax_type_id smallint,
    tax_display_type_id smallint,
    order_item_type_id smallint,
    product_name character varying(255) NOT NULL,
    product_code character varying(255) DEFAULT NULL::character varying,
    class_name1 character varying(255) DEFAULT NULL::character varying,
    class_name2 character varying(255) DEFAULT NULL::character varying,
    class_category_name1 character varying(255) DEFAULT NULL::character varying,
    class_category_name2 character varying(255) DEFAULT NULL::character varying,
    price numeric(12,2) DEFAULT '0'::numeric NOT NULL,
    quantity numeric(10,0) DEFAULT '0'::numeric NOT NULL,
    tax numeric(10,0) DEFAULT '0'::numeric NOT NULL,
    tax_rate numeric(10,0) DEFAULT '0'::numeric NOT NULL,
    tax_rule_id smallint,
    currency_code character varying(255) DEFAULT NULL::character varying,
    processor_name character varying(255) DEFAULT NULL::character varying,
    point_rate numeric(10,0) DEFAULT NULL::numeric,
    discriminator_type character varying(255) NOT NULL
);
 "   DROP TABLE public.dtb_order_item;
       public         heap    postgres    false                       1259    16984    dtb_order_item_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_order_item_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.dtb_order_item_id_seq;
       public          postgres    false    269            �           0    0    dtb_order_item_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.dtb_order_item_id_seq OWNED BY public.dtb_order_item.id;
          public          postgres    false    268                       1259    17015    dtb_order_pdf    TABLE     �  CREATE TABLE public.dtb_order_pdf (
    member_id integer NOT NULL,
    title character varying(255) DEFAULT NULL::character varying,
    message1 character varying(255) DEFAULT NULL::character varying,
    message2 character varying(255) DEFAULT NULL::character varying,
    message3 character varying(255) DEFAULT NULL::character varying,
    note1 character varying(255) DEFAULT NULL::character varying,
    note2 character varying(255) DEFAULT NULL::character varying,
    note3 character varying(255) DEFAULT NULL::character varying,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    visible boolean DEFAULT true NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 !   DROP TABLE public.dtb_order_pdf;
       public         heap    postgres    false            �           0    0     COLUMN dtb_order_pdf.create_date    COMMENT     N   COMMENT ON COLUMN public.dtb_order_pdf.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    270            �           0    0     COLUMN dtb_order_pdf.update_date    COMMENT     N   COMMENT ON COLUMN public.dtb_order_pdf.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    270                       1259    17033    dtb_page    TABLE     8  CREATE TABLE public.dtb_page (
    id integer NOT NULL,
    master_page_id integer,
    page_name character varying(255) DEFAULT NULL::character varying,
    url character varying(255) NOT NULL,
    file_name character varying(255) DEFAULT NULL::character varying,
    edit_type smallint DEFAULT 1 NOT NULL,
    author character varying(255) DEFAULT NULL::character varying,
    description character varying(255) DEFAULT NULL::character varying,
    keyword character varying(255) DEFAULT NULL::character varying,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    meta_robots character varying(255) DEFAULT NULL::character varying,
    meta_tags character varying(4000) DEFAULT NULL::character varying,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.dtb_page;
       public         heap    postgres    false            �           0    0    COLUMN dtb_page.create_date    COMMENT     I   COMMENT ON COLUMN public.dtb_page.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    272            �           0    0    COLUMN dtb_page.update_date    COMMENT     I   COMMENT ON COLUMN public.dtb_page.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    272                       1259    17031    dtb_page_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_page_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.dtb_page_id_seq;
       public          postgres    false    272            �           0    0    dtb_page_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.dtb_page_id_seq OWNED BY public.dtb_page.id;
          public          postgres    false    271                       1259    17052    dtb_page_layout    TABLE     �   CREATE TABLE public.dtb_page_layout (
    page_id integer NOT NULL,
    layout_id integer NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 #   DROP TABLE public.dtb_page_layout;
       public         heap    postgres    false                       1259    17061    dtb_payment    TABLE     �  CREATE TABLE public.dtb_payment (
    id integer NOT NULL,
    creator_id integer,
    payment_method character varying(255) DEFAULT NULL::character varying,
    charge numeric(12,2) DEFAULT '0'::numeric,
    rule_max numeric(12,2) DEFAULT NULL::numeric,
    sort_no smallint,
    fixed boolean DEFAULT true NOT NULL,
    payment_image character varying(255) DEFAULT NULL::character varying,
    rule_min numeric(12,2) DEFAULT NULL::numeric,
    method_class character varying(255) DEFAULT NULL::character varying,
    visible boolean DEFAULT true NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.dtb_payment;
       public         heap    postgres    false            �           0    0    COLUMN dtb_payment.create_date    COMMENT     L   COMMENT ON COLUMN public.dtb_payment.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    275            �           0    0    COLUMN dtb_payment.update_date    COMMENT     L   COMMENT ON COLUMN public.dtb_payment.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    275                       1259    17059    dtb_payment_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_payment_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.dtb_payment_id_seq;
       public          postgres    false    275            �           0    0    dtb_payment_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.dtb_payment_id_seq OWNED BY public.dtb_payment.id;
          public          postgres    false    274                       1259    17079    dtb_payment_option    TABLE     �   CREATE TABLE public.dtb_payment_option (
    delivery_id integer NOT NULL,
    payment_id integer NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 &   DROP TABLE public.dtb_payment_option;
       public         heap    postgres    false                       1259    17088 
   dtb_plugin    TABLE     �  CREATE TABLE public.dtb_plugin (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    code character varying(255) NOT NULL,
    enabled boolean DEFAULT false NOT NULL,
    version character varying(255) NOT NULL,
    source character varying(255) NOT NULL,
    initialized boolean DEFAULT false NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.dtb_plugin;
       public         heap    postgres    false            �           0    0    COLUMN dtb_plugin.create_date    COMMENT     K   COMMENT ON COLUMN public.dtb_plugin.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    278            �           0    0    COLUMN dtb_plugin.update_date    COMMENT     K   COMMENT ON COLUMN public.dtb_plugin.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    278                       1259    17086    dtb_plugin_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_plugin_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.dtb_plugin_id_seq;
       public          postgres    false    278            �           0    0    dtb_plugin_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.dtb_plugin_id_seq OWNED BY public.dtb_plugin.id;
          public          postgres    false    277                       1259    17101    dtb_product    TABLE     �  CREATE TABLE public.dtb_product (
    id integer NOT NULL,
    creator_id integer,
    product_status_id smallint,
    name character varying(255) NOT NULL,
    note character varying(4000) DEFAULT NULL::character varying,
    description_list character varying(4000) DEFAULT NULL::character varying,
    description_detail character varying(4000) DEFAULT NULL::character varying,
    search_word character varying(4000) DEFAULT NULL::character varying,
    free_area text,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.dtb_product;
       public         heap    postgres    false            �           0    0    COLUMN dtb_product.create_date    COMMENT     L   COMMENT ON COLUMN public.dtb_product.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    280            �           0    0    COLUMN dtb_product.update_date    COMMENT     L   COMMENT ON COLUMN public.dtb_product.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    280                       1259    17116    dtb_product_category    TABLE     �   CREATE TABLE public.dtb_product_category (
    product_id integer NOT NULL,
    category_id integer NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 (   DROP TABLE public.dtb_product_category;
       public         heap    postgres    false                       1259    17125    dtb_product_class    TABLE     �  CREATE TABLE public.dtb_product_class (
    id integer NOT NULL,
    product_id integer,
    sale_type_id smallint,
    class_category_id1 integer,
    class_category_id2 integer,
    delivery_duration_id integer,
    creator_id integer,
    product_code character varying(255) DEFAULT NULL::character varying,
    stock numeric(10,0) DEFAULT NULL::numeric,
    stock_unlimited boolean DEFAULT false NOT NULL,
    sale_limit numeric(10,0) DEFAULT NULL::numeric,
    price01 numeric(12,2) DEFAULT NULL::numeric,
    price02 numeric(12,2) NOT NULL,
    delivery_fee numeric(12,2) DEFAULT NULL::numeric,
    visible boolean DEFAULT true NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    currency_code character varying(255) DEFAULT NULL::character varying,
    point_rate numeric(10,0) DEFAULT NULL::numeric,
    discriminator_type character varying(255) NOT NULL
);
 %   DROP TABLE public.dtb_product_class;
       public         heap    postgres    false            �           0    0 $   COLUMN dtb_product_class.create_date    COMMENT     R   COMMENT ON COLUMN public.dtb_product_class.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    283            �           0    0 $   COLUMN dtb_product_class.update_date    COMMENT     R   COMMENT ON COLUMN public.dtb_product_class.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    283                       1259    17123    dtb_product_class_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_product_class_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.dtb_product_class_id_seq;
       public          postgres    false    283            �           0    0    dtb_product_class_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.dtb_product_class_id_seq OWNED BY public.dtb_product_class.id;
          public          postgres    false    282                       1259    17099    dtb_product_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_product_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.dtb_product_id_seq;
       public          postgres    false    280            �           0    0    dtb_product_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.dtb_product_id_seq OWNED BY public.dtb_product.id;
          public          postgres    false    279                       1259    17153    dtb_product_image    TABLE     /  CREATE TABLE public.dtb_product_image (
    id integer NOT NULL,
    product_id integer,
    creator_id integer,
    file_name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 %   DROP TABLE public.dtb_product_image;
       public         heap    postgres    false            �           0    0 $   COLUMN dtb_product_image.create_date    COMMENT     R   COMMENT ON COLUMN public.dtb_product_image.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    285                       1259    17151    dtb_product_image_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_product_image_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.dtb_product_image_id_seq;
       public          postgres    false    285            �           0    0    dtb_product_image_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.dtb_product_image_id_seq OWNED BY public.dtb_product_image.id;
          public          postgres    false    284                       1259    17166    dtb_product_stock    TABLE     L  CREATE TABLE public.dtb_product_stock (
    id integer NOT NULL,
    product_class_id integer,
    creator_id integer,
    stock numeric(10,0) DEFAULT NULL::numeric,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 %   DROP TABLE public.dtb_product_stock;
       public         heap    postgres    false            �           0    0 $   COLUMN dtb_product_stock.create_date    COMMENT     R   COMMENT ON COLUMN public.dtb_product_stock.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    287            �           0    0 $   COLUMN dtb_product_stock.update_date    COMMENT     R   COMMENT ON COLUMN public.dtb_product_stock.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    287                       1259    17164    dtb_product_stock_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_product_stock_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 /   DROP SEQUENCE public.dtb_product_stock_id_seq;
       public          postgres    false    287            �           0    0    dtb_product_stock_id_seq    SEQUENCE OWNED BY     U   ALTER SEQUENCE public.dtb_product_stock_id_seq OWNED BY public.dtb_product_stock.id;
          public          postgres    false    286            !           1259    17177    dtb_product_tag    TABLE     �   CREATE TABLE public.dtb_product_tag (
    id integer NOT NULL,
    product_id integer,
    tag_id integer,
    creator_id integer,
    create_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 #   DROP TABLE public.dtb_product_tag;
       public         heap    postgres    false            �           0    0 "   COLUMN dtb_product_tag.create_date    COMMENT     P   COMMENT ON COLUMN public.dtb_product_tag.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    289                        1259    17175    dtb_product_tag_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_product_tag_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.dtb_product_tag_id_seq;
       public          postgres    false    289            �           0    0    dtb_product_tag_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.dtb_product_tag_id_seq OWNED BY public.dtb_product_tag.id;
          public          postgres    false    288            #           1259    17188    dtb_shipping    TABLE     �  CREATE TABLE public.dtb_shipping (
    id integer NOT NULL,
    order_id integer,
    country_id smallint,
    pref_id smallint,
    delivery_id integer,
    creator_id integer,
    name01 character varying(255) NOT NULL,
    name02 character varying(255) NOT NULL,
    kana01 character varying(255) DEFAULT NULL::character varying,
    kana02 character varying(255) DEFAULT NULL::character varying,
    company_name character varying(255) DEFAULT NULL::character varying,
    phone_number character varying(14) DEFAULT NULL::character varying,
    postal_code character varying(8) DEFAULT NULL::character varying,
    addr01 character varying(255) DEFAULT NULL::character varying,
    addr02 character varying(255) DEFAULT NULL::character varying,
    delivery_name character varying(255) DEFAULT NULL::character varying,
    time_id integer,
    delivery_time character varying(255) DEFAULT NULL::character varying,
    delivery_date timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    shipping_date timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    tracking_number character varying(255) DEFAULT NULL::character varying,
    note character varying(4000) DEFAULT NULL::character varying,
    sort_no smallint,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    mail_send_date timestamp(0) with time zone DEFAULT NULL::timestamp with time zone,
    discriminator_type character varying(255) NOT NULL
);
     DROP TABLE public.dtb_shipping;
       public         heap    postgres    false            �           0    0 !   COLUMN dtb_shipping.delivery_date    COMMENT     O   COMMENT ON COLUMN public.dtb_shipping.delivery_date IS '(DC2Type:datetimetz)';
          public          postgres    false    291            �           0    0 !   COLUMN dtb_shipping.shipping_date    COMMENT     O   COMMENT ON COLUMN public.dtb_shipping.shipping_date IS '(DC2Type:datetimetz)';
          public          postgres    false    291            �           0    0    COLUMN dtb_shipping.create_date    COMMENT     M   COMMENT ON COLUMN public.dtb_shipping.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    291            �           0    0    COLUMN dtb_shipping.update_date    COMMENT     M   COMMENT ON COLUMN public.dtb_shipping.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    291            �           0    0 "   COLUMN dtb_shipping.mail_send_date    COMMENT     P   COMMENT ON COLUMN public.dtb_shipping.mail_send_date IS '(DC2Type:datetimetz)';
          public          postgres    false    291            "           1259    17186    dtb_shipping_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_shipping_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.dtb_shipping_id_seq;
       public          postgres    false    291            �           0    0    dtb_shipping_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.dtb_shipping_id_seq OWNED BY public.dtb_shipping.id;
          public          postgres    false    290            %           1259    17218    dtb_tag    TABLE     �   CREATE TABLE public.dtb_tag (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.dtb_tag;
       public         heap    postgres    false            $           1259    17216    dtb_tag_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_tag_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.dtb_tag_id_seq;
       public          postgres    false    293            �           0    0    dtb_tag_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.dtb_tag_id_seq OWNED BY public.dtb_tag.id;
          public          postgres    false    292            '           1259    17229    dtb_tax_rule    TABLE     )  CREATE TABLE public.dtb_tax_rule (
    id integer NOT NULL,
    product_class_id integer,
    creator_id integer,
    country_id smallint,
    pref_id smallint,
    product_id integer,
    rounding_type_id smallint,
    tax_rate numeric(10,0) DEFAULT '8'::numeric NOT NULL,
    tax_adjust numeric(10,0) DEFAULT '0'::numeric NOT NULL,
    apply_date timestamp(0) with time zone NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
     DROP TABLE public.dtb_tax_rule;
       public         heap    postgres    false            �           0    0    COLUMN dtb_tax_rule.apply_date    COMMENT     L   COMMENT ON COLUMN public.dtb_tax_rule.apply_date IS '(DC2Type:datetimetz)';
          public          postgres    false    295            �           0    0    COLUMN dtb_tax_rule.create_date    COMMENT     M   COMMENT ON COLUMN public.dtb_tax_rule.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    295            �           0    0    COLUMN dtb_tax_rule.update_date    COMMENT     M   COMMENT ON COLUMN public.dtb_tax_rule.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    295            &           1259    17227    dtb_tax_rule_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_tax_rule_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.dtb_tax_rule_id_seq;
       public          postgres    false    295            �           0    0    dtb_tax_rule_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.dtb_tax_rule_id_seq OWNED BY public.dtb_tax_rule.id;
          public          postgres    false    294            )           1259    17245    dtb_template    TABLE     e  CREATE TABLE public.dtb_template (
    id integer NOT NULL,
    device_type_id smallint,
    template_code character varying(255) NOT NULL,
    template_name character varying(255) NOT NULL,
    create_date timestamp(0) with time zone NOT NULL,
    update_date timestamp(0) with time zone NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
     DROP TABLE public.dtb_template;
       public         heap    postgres    false            �           0    0    COLUMN dtb_template.create_date    COMMENT     M   COMMENT ON COLUMN public.dtb_template.create_date IS '(DC2Type:datetimetz)';
          public          postgres    false    297            �           0    0    COLUMN dtb_template.update_date    COMMENT     M   COMMENT ON COLUMN public.dtb_template.update_date IS '(DC2Type:datetimetz)';
          public          postgres    false    297            (           1259    17243    dtb_template_id_seq    SEQUENCE     �   CREATE SEQUENCE public.dtb_template_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.dtb_template_id_seq;
       public          postgres    false    297            �           0    0    dtb_template_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.dtb_template_id_seq OWNED BY public.dtb_template.id;
          public          postgres    false    296            �            1259    16781    mtb_authority    TABLE     �   CREATE TABLE public.mtb_authority (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 !   DROP TABLE public.mtb_authority;
       public         heap    postgres    false            �            1259    16789    mtb_country    TABLE     �   CREATE TABLE public.mtb_country (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.mtb_country;
       public         heap    postgres    false            �            1259    16797    mtb_csv_type    TABLE     �   CREATE TABLE public.mtb_csv_type (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
     DROP TABLE public.mtb_csv_type;
       public         heap    postgres    false            �            1259    16805    mtb_customer_order_status    TABLE     �   CREATE TABLE public.mtb_customer_order_status (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 -   DROP TABLE public.mtb_customer_order_status;
       public         heap    postgres    false            �            1259    16813    mtb_customer_status    TABLE     �   CREATE TABLE public.mtb_customer_status (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 '   DROP TABLE public.mtb_customer_status;
       public         heap    postgres    false            �            1259    16821    mtb_device_type    TABLE     �   CREATE TABLE public.mtb_device_type (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 #   DROP TABLE public.mtb_device_type;
       public         heap    postgres    false            �            1259    16829    mtb_job    TABLE     �   CREATE TABLE public.mtb_job (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.mtb_job;
       public         heap    postgres    false            �            1259    16837    mtb_order_item_type    TABLE     �   CREATE TABLE public.mtb_order_item_type (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 '   DROP TABLE public.mtb_order_item_type;
       public         heap    postgres    false            �            1259    16845    mtb_order_status    TABLE     �   CREATE TABLE public.mtb_order_status (
    id smallint NOT NULL,
    display_order_count boolean DEFAULT false NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 $   DROP TABLE public.mtb_order_status;
       public         heap    postgres    false            �            1259    16854    mtb_order_status_color    TABLE     �   CREATE TABLE public.mtb_order_status_color (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 *   DROP TABLE public.mtb_order_status_color;
       public         heap    postgres    false            �            1259    16862    mtb_page_max    TABLE     �   CREATE TABLE public.mtb_page_max (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
     DROP TABLE public.mtb_page_max;
       public         heap    postgres    false            �            1259    16870    mtb_pref    TABLE     �   CREATE TABLE public.mtb_pref (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.mtb_pref;
       public         heap    postgres    false            �            1259    16878    mtb_product_list_max    TABLE     �   CREATE TABLE public.mtb_product_list_max (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 (   DROP TABLE public.mtb_product_list_max;
       public         heap    postgres    false                        1259    16886    mtb_product_list_order_by    TABLE     �   CREATE TABLE public.mtb_product_list_order_by (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 -   DROP TABLE public.mtb_product_list_order_by;
       public         heap    postgres    false                       1259    16894    mtb_product_status    TABLE     �   CREATE TABLE public.mtb_product_status (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 &   DROP TABLE public.mtb_product_status;
       public         heap    postgres    false                       1259    16902    mtb_rounding_type    TABLE     �   CREATE TABLE public.mtb_rounding_type (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 %   DROP TABLE public.mtb_rounding_type;
       public         heap    postgres    false                       1259    16910    mtb_sale_type    TABLE     �   CREATE TABLE public.mtb_sale_type (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 !   DROP TABLE public.mtb_sale_type;
       public         heap    postgres    false                       1259    16918    mtb_sex    TABLE     �   CREATE TABLE public.mtb_sex (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.mtb_sex;
       public         heap    postgres    false                       1259    16926    mtb_tax_display_type    TABLE     �   CREATE TABLE public.mtb_tax_display_type (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
 (   DROP TABLE public.mtb_tax_display_type;
       public         heap    postgres    false                       1259    16934    mtb_tax_type    TABLE     �   CREATE TABLE public.mtb_tax_type (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
     DROP TABLE public.mtb_tax_type;
       public         heap    postgres    false                       1259    16942    mtb_work    TABLE     �   CREATE TABLE public.mtb_work (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL,
    discriminator_type character varying(255) NOT NULL
);
    DROP TABLE public.mtb_work;
       public         heap    postgres    false            ,           1259    17714    plg_ec4_momo_config    TABLE     ]  CREATE TABLE public.plg_ec4_momo_config (
    id integer NOT NULL,
    env character varying(255) NOT NULL,
    partner_code character varying(255) NOT NULL,
    store_id character varying(50) NOT NULL,
    access_key character varying(50) NOT NULL,
    secret_key character varying(50) NOT NULL,
    api_endpoint character varying(255) NOT NULL
);
 '   DROP TABLE public.plg_ec4_momo_config;
       public         heap    postgres    false            +           1259    17712    plg_ec4_momo_config_id_seq    SEQUENCE     �   CREATE SEQUENCE public.plg_ec4_momo_config_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.plg_ec4_momo_config_id_seq;
       public          postgres    false    300            �           0    0    plg_ec4_momo_config_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.plg_ec4_momo_config_id_seq OWNED BY public.plg_ec4_momo_config.id;
          public          postgres    false    299            .           1259    17725    plg_ec4_momo_transactions    TABLE     �  CREATE TABLE public.plg_ec4_momo_transactions (
    id integer NOT NULL,
    order_id integer,
    env character varying(255) DEFAULT NULL::character varying,
    partnercode character varying(255) DEFAULT NULL::character varying,
    storeid character varying(50) DEFAULT NULL::character varying,
    accesskey character varying(255) DEFAULT NULL::character varying,
    amount bigint,
    partnerrefid character varying(50) DEFAULT NULL::character varying,
    partnertransid character varying(50) DEFAULT NULL::character varying,
    transtype character varying(20) DEFAULT NULL::character varying,
    momotransid character varying(50) DEFAULT NULL::character varying,
    status character varying(50) DEFAULT NULL::character varying,
    message character varying(255) DEFAULT NULL::character varying,
    responsetime bigint,
    signature character varying(255) DEFAULT NULL::character varying
);
 -   DROP TABLE public.plg_ec4_momo_transactions;
       public         heap    postgres    false            -           1259    17723     plg_ec4_momo_transactions_id_seq    SEQUENCE     �   CREATE SEQUENCE public.plg_ec4_momo_transactions_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.plg_ec4_momo_transactions_id_seq;
       public          postgres    false    302            �           0    0     plg_ec4_momo_transactions_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.plg_ec4_momo_transactions_id_seq OWNED BY public.plg_ec4_momo_transactions.id;
          public          postgres    false    301            0           1259    17748    plg_related_product    TABLE     �   CREATE TABLE public.plg_related_product (
    id integer NOT NULL,
    product_id integer,
    child_product_id integer,
    content character varying(4000) DEFAULT NULL::character varying
);
 '   DROP TABLE public.plg_related_product;
       public         heap    postgres    false            /           1259    17746    plg_related_product_id_seq    SEQUENCE     �   CREATE SEQUENCE public.plg_related_product_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.plg_related_product_id_seq;
       public          postgres    false    304            �           0    0    plg_related_product_id_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.plg_related_product_id_seq OWNED BY public.plg_related_product.id;
          public          postgres    false    303            2           1259    19094    plg_sample_payment_config    TABLE       CREATE TABLE public.plg_sample_payment_config (
    id integer NOT NULL,
    api_url character varying(1024) DEFAULT NULL::character varying,
    api_id character varying(255) DEFAULT NULL::character varying,
    api_password character varying(255) DEFAULT NULL::character varying
);
 -   DROP TABLE public.plg_sample_payment_config;
       public         heap    postgres    false            1           1259    19092     plg_sample_payment_config_id_seq    SEQUENCE     �   CREATE SEQUENCE public.plg_sample_payment_config_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 7   DROP SEQUENCE public.plg_sample_payment_config_id_seq;
       public          postgres    false    306            �           0    0     plg_sample_payment_config_id_seq    SEQUENCE OWNED BY     e   ALTER SEQUENCE public.plg_sample_payment_config_id_seq OWNED BY public.plg_sample_payment_config.id;
          public          postgres    false    305            3           1259    19106 %   plg_sample_payment_cvs_payment_status    TABLE     �   CREATE TABLE public.plg_sample_payment_cvs_payment_status (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL
);
 9   DROP TABLE public.plg_sample_payment_cvs_payment_status;
       public         heap    postgres    false            4           1259    19111    plg_sample_payment_cvs_type    TABLE     �   CREATE TABLE public.plg_sample_payment_cvs_type (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL
);
 /   DROP TABLE public.plg_sample_payment_cvs_type;
       public         heap    postgres    false            5           1259    19116 !   plg_sample_payment_payment_status    TABLE     �   CREATE TABLE public.plg_sample_payment_payment_status (
    id smallint NOT NULL,
    name character varying(255) NOT NULL,
    sort_no smallint NOT NULL
);
 5   DROP TABLE public.plg_sample_payment_payment_status;
       public         heap    postgres    false            .           2604    16451    dtb_authority_role id    DEFAULT     ~   ALTER TABLE ONLY public.dtb_authority_role ALTER COLUMN id SET DEFAULT nextval('public.dtb_authority_role_id_seq'::regclass);
 D   ALTER TABLE public.dtb_authority_role ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    204    205    205            /           2604    16464    dtb_base_info id    DEFAULT     t   ALTER TABLE ONLY public.dtb_base_info ALTER COLUMN id SET DEFAULT nextval('public.dtb_base_info_id_seq'::regclass);
 ?   ALTER TABLE public.dtb_base_info ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    206    207    207            M           2604    16506    dtb_block id    DEFAULT     l   ALTER TABLE ONLY public.dtb_block ALTER COLUMN id SET DEFAULT nextval('public.dtb_block_id_seq'::regclass);
 ;   ALTER TABLE public.dtb_block ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    208    209    209            Q           2604    16529    dtb_cart id    DEFAULT     j   ALTER TABLE ONLY public.dtb_cart ALTER COLUMN id SET DEFAULT nextval('public.dtb_cart_id_seq'::regclass);
 :   ALTER TABLE public.dtb_cart ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    212    211    212            X           2604    16549    dtb_cart_item id    DEFAULT     t   ALTER TABLE ONLY public.dtb_cart_item ALTER COLUMN id SET DEFAULT nextval('public.dtb_cart_item_id_seq'::regclass);
 ?   ALTER TABLE public.dtb_cart_item ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    214    213    214            \           2604    16562    dtb_category id    DEFAULT     r   ALTER TABLE ONLY public.dtb_category ALTER COLUMN id SET DEFAULT nextval('public.dtb_category_id_seq'::regclass);
 >   ALTER TABLE public.dtb_category ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    216    216            ]           2604    16575    dtb_class_category id    DEFAULT     ~   ALTER TABLE ONLY public.dtb_class_category ALTER COLUMN id SET DEFAULT nextval('public.dtb_class_category_id_seq'::regclass);
 D   ALTER TABLE public.dtb_class_category ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    218    218            `           2604    16590    dtb_class_name id    DEFAULT     v   ALTER TABLE ONLY public.dtb_class_name ALTER COLUMN id SET DEFAULT nextval('public.dtb_class_name_id_seq'::regclass);
 @   ALTER TABLE public.dtb_class_name ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    220    219    220            b           2604    16603 
   dtb_csv id    DEFAULT     h   ALTER TABLE ONLY public.dtb_csv ALTER COLUMN id SET DEFAULT nextval('public.dtb_csv_id_seq'::regclass);
 9   ALTER TABLE public.dtb_csv ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    221    222            e           2604    16618    dtb_customer id    DEFAULT     r   ALTER TABLE ONLY public.dtb_customer ALTER COLUMN id SET DEFAULT nextval('public.dtb_customer_id_seq'::regclass);
 >   ALTER TABLE public.dtb_customer ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    224    224            w           2604    16658    dtb_customer_address id    DEFAULT     �   ALTER TABLE ONLY public.dtb_customer_address ALTER COLUMN id SET DEFAULT nextval('public.dtb_customer_address_id_seq'::regclass);
 F   ALTER TABLE public.dtb_customer_address ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    225    226                       2604    16679     dtb_customer_favorite_product id    DEFAULT     �   ALTER TABLE ONLY public.dtb_customer_favorite_product ALTER COLUMN id SET DEFAULT nextval('public.dtb_customer_favorite_product_id_seq'::regclass);
 O   ALTER TABLE public.dtb_customer_favorite_product ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    227    228            �           2604    16689    dtb_delivery id    DEFAULT     r   ALTER TABLE ONLY public.dtb_delivery ALTER COLUMN id SET DEFAULT nextval('public.dtb_delivery_id_seq'::regclass);
 >   ALTER TABLE public.dtb_delivery ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    230    229    230            �           2604    16707    dtb_delivery_duration id    DEFAULT     �   ALTER TABLE ONLY public.dtb_delivery_duration ALTER COLUMN id SET DEFAULT nextval('public.dtb_delivery_duration_id_seq'::regclass);
 G   ALTER TABLE public.dtb_delivery_duration ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    232    231    232            �           2604    16720    dtb_delivery_fee id    DEFAULT     z   ALTER TABLE ONLY public.dtb_delivery_fee ALTER COLUMN id SET DEFAULT nextval('public.dtb_delivery_fee_id_seq'::regclass);
 B   ALTER TABLE public.dtb_delivery_fee ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    233    234    234            �           2604    16730    dtb_delivery_time id    DEFAULT     |   ALTER TABLE ONLY public.dtb_delivery_time ALTER COLUMN id SET DEFAULT nextval('public.dtb_delivery_time_id_seq'::regclass);
 C   ALTER TABLE public.dtb_delivery_time ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    236    235    236            �           2604    16743    dtb_layout id    DEFAULT     n   ALTER TABLE ONLY public.dtb_layout ALTER COLUMN id SET DEFAULT nextval('public.dtb_layout_id_seq'::regclass);
 <   ALTER TABLE public.dtb_layout ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    237    238    238            �           2604    16756    dtb_mail_history id    DEFAULT     z   ALTER TABLE ONLY public.dtb_mail_history ALTER COLUMN id SET DEFAULT nextval('public.dtb_mail_history_id_seq'::regclass);
 B   ALTER TABLE public.dtb_mail_history ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    239    240    240            �           2604    16771    dtb_mail_template id    DEFAULT     |   ALTER TABLE ONLY public.dtb_mail_template ALTER COLUMN id SET DEFAULT nextval('public.dtb_mail_template_id_seq'::regclass);
 C   ALTER TABLE public.dtb_mail_template ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    241    242    242            �           2604    16955    dtb_member id    DEFAULT     n   ALTER TABLE ONLY public.dtb_member ALTER COLUMN id SET DEFAULT nextval('public.dtb_member_id_seq'::regclass);
 <   ALTER TABLE public.dtb_member ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    264    265    265            �           2604    16973    dtb_news id    DEFAULT     j   ALTER TABLE ONLY public.dtb_news ALTER COLUMN id SET DEFAULT nextval('public.dtb_news_id_seq'::regclass);
 :   ALTER TABLE public.dtb_news ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    266    267    267                       2604    16400    dtb_order id    DEFAULT     l   ALTER TABLE ONLY public.dtb_order ALTER COLUMN id SET DEFAULT nextval('public.dtb_order_id_seq'::regclass);
 ;   ALTER TABLE public.dtb_order ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    203    202    203            �           2604    16989    dtb_order_item id    DEFAULT     v   ALTER TABLE ONLY public.dtb_order_item ALTER COLUMN id SET DEFAULT nextval('public.dtb_order_item_id_seq'::regclass);
 @   ALTER TABLE public.dtb_order_item ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    269    268    269            �           2604    17036    dtb_page id    DEFAULT     j   ALTER TABLE ONLY public.dtb_page ALTER COLUMN id SET DEFAULT nextval('public.dtb_page_id_seq'::regclass);
 :   ALTER TABLE public.dtb_page ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    272    271    272            �           2604    17064    dtb_payment id    DEFAULT     p   ALTER TABLE ONLY public.dtb_payment ALTER COLUMN id SET DEFAULT nextval('public.dtb_payment_id_seq'::regclass);
 =   ALTER TABLE public.dtb_payment ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    275    274    275            �           2604    17091    dtb_plugin id    DEFAULT     n   ALTER TABLE ONLY public.dtb_plugin ALTER COLUMN id SET DEFAULT nextval('public.dtb_plugin_id_seq'::regclass);
 <   ALTER TABLE public.dtb_plugin ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    278    277    278            �           2604    17104    dtb_product id    DEFAULT     p   ALTER TABLE ONLY public.dtb_product ALTER COLUMN id SET DEFAULT nextval('public.dtb_product_id_seq'::regclass);
 =   ALTER TABLE public.dtb_product ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    279    280    280            �           2604    17128    dtb_product_class id    DEFAULT     |   ALTER TABLE ONLY public.dtb_product_class ALTER COLUMN id SET DEFAULT nextval('public.dtb_product_class_id_seq'::regclass);
 C   ALTER TABLE public.dtb_product_class ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    283    282    283            �           2604    17156    dtb_product_image id    DEFAULT     |   ALTER TABLE ONLY public.dtb_product_image ALTER COLUMN id SET DEFAULT nextval('public.dtb_product_image_id_seq'::regclass);
 C   ALTER TABLE public.dtb_product_image ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    284    285    285            �           2604    17169    dtb_product_stock id    DEFAULT     |   ALTER TABLE ONLY public.dtb_product_stock ALTER COLUMN id SET DEFAULT nextval('public.dtb_product_stock_id_seq'::regclass);
 C   ALTER TABLE public.dtb_product_stock ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    287    286    287            �           2604    17180    dtb_product_tag id    DEFAULT     x   ALTER TABLE ONLY public.dtb_product_tag ALTER COLUMN id SET DEFAULT nextval('public.dtb_product_tag_id_seq'::regclass);
 A   ALTER TABLE public.dtb_product_tag ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    288    289    289            �           2604    17191    dtb_shipping id    DEFAULT     r   ALTER TABLE ONLY public.dtb_shipping ALTER COLUMN id SET DEFAULT nextval('public.dtb_shipping_id_seq'::regclass);
 >   ALTER TABLE public.dtb_shipping ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    290    291    291            �           2604    17221 
   dtb_tag id    DEFAULT     h   ALTER TABLE ONLY public.dtb_tag ALTER COLUMN id SET DEFAULT nextval('public.dtb_tag_id_seq'::regclass);
 9   ALTER TABLE public.dtb_tag ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    293    292    293            �           2604    17232    dtb_tax_rule id    DEFAULT     r   ALTER TABLE ONLY public.dtb_tax_rule ALTER COLUMN id SET DEFAULT nextval('public.dtb_tax_rule_id_seq'::regclass);
 >   ALTER TABLE public.dtb_tax_rule ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    294    295    295            �           2604    17248    dtb_template id    DEFAULT     r   ALTER TABLE ONLY public.dtb_template ALTER COLUMN id SET DEFAULT nextval('public.dtb_template_id_seq'::regclass);
 >   ALTER TABLE public.dtb_template ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    296    297    297            �           2604    17717    plg_ec4_momo_config id    DEFAULT     �   ALTER TABLE ONLY public.plg_ec4_momo_config ALTER COLUMN id SET DEFAULT nextval('public.plg_ec4_momo_config_id_seq'::regclass);
 E   ALTER TABLE public.plg_ec4_momo_config ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    300    299    300            �           2604    17728    plg_ec4_momo_transactions id    DEFAULT     �   ALTER TABLE ONLY public.plg_ec4_momo_transactions ALTER COLUMN id SET DEFAULT nextval('public.plg_ec4_momo_transactions_id_seq'::regclass);
 K   ALTER TABLE public.plg_ec4_momo_transactions ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    302    301    302            �           2604    17751    plg_related_product id    DEFAULT     �   ALTER TABLE ONLY public.plg_related_product ALTER COLUMN id SET DEFAULT nextval('public.plg_related_product_id_seq'::regclass);
 E   ALTER TABLE public.plg_related_product ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    303    304    304                        2604    19097    plg_sample_payment_config id    DEFAULT     �   ALTER TABLE ONLY public.plg_sample_payment_config ALTER COLUMN id SET DEFAULT nextval('public.plg_sample_payment_config_id_seq'::regclass);
 K   ALTER TABLE public.plg_sample_payment_config ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    305    306    306            @          0    17707    doctrine_migration_versions 
   TABLE DATA           >   COPY public.doctrine_migration_versions (version) FROM stdin;
    public          postgres    false    298   Mb      �          0    16448    dtb_authority_role 
   TABLE DATA           �   COPY public.dtb_authority_role (id, authority_id, creator_id, deny_url, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    205   jb      �          0    16461    dtb_base_info 
   TABLE DATA           Q  COPY public.dtb_base_info (id, country_id, pref_id, company_name, company_kana, postal_code, addr01, addr02, phone_number, business_hour, email01, email02, email03, email04, shop_name, shop_kana, shop_name_eng, update_date, good_traded, message, delivery_free_amount, delivery_free_quantity, option_mypage_order_status_display, option_nostock_hidden, option_favorite_product, option_product_delivery_fee, option_product_tax_rule, option_customer_activate, option_remember_me, authentication_key, php_path, option_point, basic_point_rate, point_conversion_rate, discriminator_type) FROM stdin;
    public          postgres    false    207   �b      �          0    16503 	   dtb_block 
   TABLE DATA           �   COPY public.dtb_block (id, device_type_id, block_name, file_name, use_controller, deletable, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    209   c      �          0    16517    dtb_block_position 
   TABLE DATA           i   COPY public.dtb_block_position (section, block_id, layout_id, block_row, discriminator_type) FROM stdin;
    public          postgres    false    210   �d      �          0    16526    dtb_cart 
   TABLE DATA           �   COPY public.dtb_cart (id, customer_id, cart_key, pre_order_id, total_price, delivery_fee_total, sort_no, create_date, update_date, add_point, use_point, discriminator_type) FROM stdin;
    public          postgres    false    212   'e      �          0    16546    dtb_cart_item 
   TABLE DATA           w   COPY public.dtb_cart_item (id, product_class_id, cart_id, price, quantity, point_rate, discriminator_type) FROM stdin;
    public          postgres    false    214   �e      �          0    16559    dtb_category 
   TABLE DATA           �   COPY public.dtb_category (id, parent_category_id, creator_id, category_name, hierarchy, sort_no, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    216   0f      �          0    16572    dtb_class_category 
   TABLE DATA           �   COPY public.dtb_class_category (id, class_name_id, creator_id, backend_name, name, sort_no, visible, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    218   �f      �          0    16587    dtb_class_name 
   TABLE DATA           �   COPY public.dtb_class_name (id, creator_id, backend_name, name, sort_no, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    220   �g      �          0    16600    dtb_csv 
   TABLE DATA           �   COPY public.dtb_csv (id, csv_type_id, creator_id, entity_name, field_name, reference_field_name, disp_name, sort_no, enabled, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    222   =h      �          0    16615    dtb_customer 
   TABLE DATA           �  COPY public.dtb_customer (id, customer_status_id, sex_id, job_id, country_id, pref_id, name01, name02, kana01, kana02, company_name, postal_code, addr01, addr02, email, phone_number, birth, password, salt, secret_key, first_buy_date, last_buy_date, buy_times, buy_total, note, reset_key, reset_expire, point, create_date, update_date, discriminator_type, sample_payment_cards) FROM stdin;
    public          postgres    false    224   �s      �          0    16655    dtb_customer_address 
   TABLE DATA           �   COPY public.dtb_customer_address (id, customer_id, country_id, pref_id, name01, name02, kana01, kana02, company_name, postal_code, addr01, addr02, phone_number, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    226   �t      �          0    16676    dtb_customer_favorite_product 
   TABLE DATA           �   COPY public.dtb_customer_favorite_product (id, customer_id, product_id, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    228   �t      �          0    16686    dtb_delivery 
   TABLE DATA           �   COPY public.dtb_delivery (id, creator_id, sale_type_id, name, service_name, description, confirm_url, sort_no, visible, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    230   �t      �          0    16704    dtb_delivery_duration 
   TABLE DATA           `   COPY public.dtb_delivery_duration (id, name, duration, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    232   qu                 0    16717    dtb_delivery_fee 
   TABLE DATA           ]   COPY public.dtb_delivery_fee (id, delivery_id, pref_id, fee, discriminator_type) FROM stdin;
    public          postgres    false    234   Kv                0    16727    dtb_delivery_time 
   TABLE DATA           �   COPY public.dtb_delivery_time (id, delivery_id, delivery_time, sort_no, visible, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    236   �x                0    16740 
   dtb_layout 
   TABLE DATA           s   COPY public.dtb_layout (id, device_type_id, layout_name, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    238   	y                0    16753    dtb_mail_history 
   TABLE DATA           �   COPY public.dtb_mail_history (id, order_id, creator_id, send_date, mail_subject, mail_body, mail_html_body, discriminator_type) FROM stdin;
    public          postgres    false    240   {y                0    16768    dtb_mail_template 
   TABLE DATA           �   COPY public.dtb_mail_template (id, creator_id, name, file_name, mail_subject, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    242   ��                0    16952 
   dtb_member 
   TABLE DATA           �   COPY public.dtb_member (id, work_id, authority_id, creator_id, name, department, login_id, password, salt, sort_no, create_date, update_date, login_date, discriminator_type) FROM stdin;
    public          postgres    false    265   q�      !          0    16970    dtb_news 
   TABLE DATA           �   COPY public.dtb_news (id, creator_id, publish_date, title, description, url, link_method, create_date, update_date, visible, discriminator_type) FROM stdin;
    public          postgres    false    267   ��      �          0    16397 	   dtb_order 
   TABLE DATA             COPY public.dtb_order (id, customer_id, country_id, pref_id, sex_id, job_id, payment_id, device_type_id, pre_order_id, order_no, message, name01, name02, kana01, kana02, company_name, email, phone_number, postal_code, addr01, addr02, birth, subtotal, discount, delivery_fee_total, charge, tax, total, payment_total, payment_method, note, create_date, update_date, order_date, payment_date, currency_code, complete_message, complete_mail_message, add_point, use_point, order_status_id, discriminator_type, sample_payment_cvs_type_id, sample_payment_payment_status_id, sample_payment_cvs_payment_status_id, sample_payment_token) FROM stdin;
    public          postgres    false    203   ��      #          0    16986    dtb_order_item 
   TABLE DATA           w  COPY public.dtb_order_item (id, order_id, product_id, product_class_id, shipping_id, rounding_type_id, tax_type_id, tax_display_type_id, order_item_type_id, product_name, product_code, class_name1, class_name2, class_category_name1, class_category_name2, price, quantity, tax, tax_rate, tax_rule_id, currency_code, processor_name, point_rate, discriminator_type) FROM stdin;
    public          postgres    false    269   K�      $          0    17015    dtb_order_pdf 
   TABLE DATA           �   COPY public.dtb_order_pdf (member_id, title, message1, message2, message3, note1, note2, note3, create_date, update_date, visible, discriminator_type) FROM stdin;
    public          postgres    false    270   k�      &          0    17033    dtb_page 
   TABLE DATA           �   COPY public.dtb_page (id, master_page_id, page_name, url, file_name, edit_type, author, description, keyword, create_date, update_date, meta_robots, meta_tags, discriminator_type) FROM stdin;
    public          postgres    false    272   ��      '          0    17052    dtb_page_layout 
   TABLE DATA           Z   COPY public.dtb_page_layout (page_id, layout_id, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    273   @�      )          0    17061    dtb_payment 
   TABLE DATA           �   COPY public.dtb_payment (id, creator_id, payment_method, charge, rule_max, sort_no, fixed, payment_image, rule_min, method_class, visible, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    275   �      *          0    17079    dtb_payment_option 
   TABLE DATA           Y   COPY public.dtb_payment_option (delivery_id, payment_id, discriminator_type) FROM stdin;
    public          postgres    false    276   D�      ,          0    17088 
   dtb_plugin 
   TABLE DATA           �   COPY public.dtb_plugin (id, name, code, enabled, version, source, initialized, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    278   ~�      .          0    17101    dtb_product 
   TABLE DATA           �   COPY public.dtb_product (id, creator_id, product_status_id, name, note, description_list, description_detail, search_word, free_area, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    280   1�      /          0    17116    dtb_product_category 
   TABLE DATA           [   COPY public.dtb_product_category (product_id, category_id, discriminator_type) FROM stdin;
    public          postgres    false    281   4�      1          0    17125    dtb_product_class 
   TABLE DATA           7  COPY public.dtb_product_class (id, product_id, sale_type_id, class_category_id1, class_category_id2, delivery_duration_id, creator_id, product_code, stock, stock_unlimited, sale_limit, price01, price02, delivery_fee, visible, create_date, update_date, currency_code, point_rate, discriminator_type) FROM stdin;
    public          postgres    false    283   ��      3          0    17153    dtb_product_image 
   TABLE DATA           |   COPY public.dtb_product_image (id, product_id, creator_id, file_name, sort_no, create_date, discriminator_type) FROM stdin;
    public          postgres    false    285   ��      5          0    17166    dtb_product_stock 
   TABLE DATA           �   COPY public.dtb_product_stock (id, product_class_id, creator_id, stock, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    287   V�      7          0    17177    dtb_product_tag 
   TABLE DATA           n   COPY public.dtb_product_tag (id, product_id, tag_id, creator_id, create_date, discriminator_type) FROM stdin;
    public          postgres    false    289   ��      9          0    17188    dtb_shipping 
   TABLE DATA           ^  COPY public.dtb_shipping (id, order_id, country_id, pref_id, delivery_id, creator_id, name01, name02, kana01, kana02, company_name, phone_number, postal_code, addr01, addr02, delivery_name, time_id, delivery_time, delivery_date, shipping_date, tracking_number, note, sort_no, create_date, update_date, mail_send_date, discriminator_type) FROM stdin;
    public          postgres    false    291   �      ;          0    17218    dtb_tag 
   TABLE DATA           H   COPY public.dtb_tag (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    293   �      =          0    17229    dtb_tax_rule 
   TABLE DATA           �   COPY public.dtb_tax_rule (id, product_class_id, creator_id, country_id, pref_id, product_id, rounding_type_id, tax_rate, tax_adjust, apply_date, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    295   n�      ?          0    17245    dtb_template 
   TABLE DATA           �   COPY public.dtb_template (id, device_type_id, template_code, template_name, create_date, update_date, discriminator_type) FROM stdin;
    public          postgres    false    297   ��      	          0    16781    mtb_authority 
   TABLE DATA           N   COPY public.mtb_authority (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    243   +�      
          0    16789    mtb_country 
   TABLE DATA           L   COPY public.mtb_country (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    244   ��                0    16797    mtb_csv_type 
   TABLE DATA           M   COPY public.mtb_csv_type (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    245   ��                0    16805    mtb_customer_order_status 
   TABLE DATA           Z   COPY public.mtb_customer_order_status (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    246   �                0    16813    mtb_customer_status 
   TABLE DATA           T   COPY public.mtb_customer_status (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    247   ¤                0    16821    mtb_device_type 
   TABLE DATA           P   COPY public.mtb_device_type (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    248   �                0    16829    mtb_job 
   TABLE DATA           H   COPY public.mtb_job (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    249   h�                0    16837    mtb_order_item_type 
   TABLE DATA           T   COPY public.mtb_order_item_type (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    250   ��                0    16845    mtb_order_status 
   TABLE DATA           f   COPY public.mtb_order_status (id, display_order_count, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    251   ��                0    16854    mtb_order_status_color 
   TABLE DATA           W   COPY public.mtb_order_status_color (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    252   ?�                0    16862    mtb_page_max 
   TABLE DATA           M   COPY public.mtb_page_max (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    253   ��                0    16870    mtb_pref 
   TABLE DATA           I   COPY public.mtb_pref (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    254   �                0    16878    mtb_product_list_max 
   TABLE DATA           U   COPY public.mtb_product_list_max (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    255   ��                0    16886    mtb_product_list_order_by 
   TABLE DATA           Z   COPY public.mtb_product_list_order_by (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    256   H�                0    16894    mtb_product_status 
   TABLE DATA           S   COPY public.mtb_product_status (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    257   ��                0    16902    mtb_rounding_type 
   TABLE DATA           R   COPY public.mtb_rounding_type (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    258   �                0    16910    mtb_sale_type 
   TABLE DATA           N   COPY public.mtb_sale_type (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    259   d�                0    16918    mtb_sex 
   TABLE DATA           H   COPY public.mtb_sex (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    260   ��                0    16926    mtb_tax_display_type 
   TABLE DATA           U   COPY public.mtb_tax_display_type (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    261   ҭ                0    16934    mtb_tax_type 
   TABLE DATA           M   COPY public.mtb_tax_type (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    262   '�                0    16942    mtb_work 
   TABLE DATA           I   COPY public.mtb_work (id, name, sort_no, discriminator_type) FROM stdin;
    public          postgres    false    263   {�      B          0    17714    plg_ec4_momo_config 
   TABLE DATA           t   COPY public.plg_ec4_momo_config (id, env, partner_code, store_id, access_key, secret_key, api_endpoint) FROM stdin;
    public          postgres    false    300   Į      D          0    17725    plg_ec4_momo_transactions 
   TABLE DATA           �   COPY public.plg_ec4_momo_transactions (id, order_id, env, partnercode, storeid, accesskey, amount, partnerrefid, partnertransid, transtype, momotransid, status, message, responsetime, signature) FROM stdin;
    public          postgres    false    302   �      F          0    17748    plg_related_product 
   TABLE DATA           X   COPY public.plg_related_product (id, product_id, child_product_id, content) FROM stdin;
    public          postgres    false    304   ��      H          0    19094    plg_sample_payment_config 
   TABLE DATA           V   COPY public.plg_sample_payment_config (id, api_url, api_id, api_password) FROM stdin;
    public          postgres    false    306   )�      I          0    19106 %   plg_sample_payment_cvs_payment_status 
   TABLE DATA           R   COPY public.plg_sample_payment_cvs_payment_status (id, name, sort_no) FROM stdin;
    public          postgres    false    307   t�      J          0    19111    plg_sample_payment_cvs_type 
   TABLE DATA           H   COPY public.plg_sample_payment_cvs_type (id, name, sort_no) FROM stdin;
    public          postgres    false    308   ۯ      K          0    19116 !   plg_sample_payment_payment_status 
   TABLE DATA           N   COPY public.plg_sample_payment_payment_status (id, name, sort_no) FROM stdin;
    public          postgres    false    309   6�      �           0    0    dtb_authority_role_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.dtb_authority_role_id_seq', 1, true);
          public          postgres    false    204            �           0    0    dtb_base_info_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.dtb_base_info_id_seq', 1, true);
          public          postgres    false    206            �           0    0    dtb_block_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.dtb_block_id_seq', 14, true);
          public          postgres    false    208            �           0    0    dtb_cart_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.dtb_cart_id_seq', 7, true);
          public          postgres    false    211            �           0    0    dtb_cart_item_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.dtb_cart_item_id_seq', 5, true);
          public          postgres    false    213            �           0    0    dtb_category_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.dtb_category_id_seq', 6, true);
          public          postgres    false    215            �           0    0    dtb_class_category_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.dtb_class_category_id_seq', 6, true);
          public          postgres    false    217            �           0    0    dtb_class_name_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.dtb_class_name_id_seq', 2, true);
          public          postgres    false    219            �           0    0    dtb_csv_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.dtb_csv_id_seq', 203, true);
          public          postgres    false    221            �           0    0    dtb_customer_address_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.dtb_customer_address_id_seq', 1, false);
          public          postgres    false    225            �           0    0 $   dtb_customer_favorite_product_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.dtb_customer_favorite_product_id_seq', 1, false);
          public          postgres    false    227            �           0    0    dtb_customer_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.dtb_customer_id_seq', 2, true);
          public          postgres    false    223            �           0    0    dtb_delivery_duration_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.dtb_delivery_duration_id_seq', 9, true);
          public          postgres    false    231            �           0    0    dtb_delivery_fee_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.dtb_delivery_fee_id_seq', 126, true);
          public          postgres    false    233            �           0    0    dtb_delivery_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.dtb_delivery_id_seq', 2, true);
          public          postgres    false    229            �           0    0    dtb_delivery_time_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.dtb_delivery_time_id_seq', 2, true);
          public          postgres    false    235            �           0    0    dtb_layout_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.dtb_layout_id_seq', 2, true);
          public          postgres    false    237            �           0    0    dtb_mail_history_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.dtb_mail_history_id_seq', 1, true);
          public          postgres    false    239            �           0    0    dtb_mail_template_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.dtb_mail_template_id_seq', 8, true);
          public          postgres    false    241            �           0    0    dtb_member_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.dtb_member_id_seq', 2, true);
          public          postgres    false    264            �           0    0    dtb_news_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.dtb_news_id_seq', 1, true);
          public          postgres    false    266            �           0    0    dtb_order_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.dtb_order_id_seq', 3, true);
          public          postgres    false    202            �           0    0    dtb_order_item_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.dtb_order_item_id_seq', 29, true);
          public          postgres    false    268            �           0    0    dtb_page_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.dtb_page_id_seq', 46, true);
          public          postgres    false    271            �           0    0    dtb_payment_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.dtb_payment_id_seq', 4, true);
          public          postgres    false    274            �           0    0    dtb_plugin_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.dtb_plugin_id_seq', 4, true);
          public          postgres    false    277            �           0    0    dtb_product_class_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.dtb_product_class_id_seq', 11, true);
          public          postgres    false    282            �           0    0    dtb_product_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.dtb_product_id_seq', 3, true);
          public          postgres    false    279            �           0    0    dtb_product_image_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.dtb_product_image_id_seq', 7, true);
          public          postgres    false    284            �           0    0    dtb_product_stock_id_seq    SEQUENCE SET     G   SELECT pg_catalog.setval('public.dtb_product_stock_id_seq', 12, true);
          public          postgres    false    286            �           0    0    dtb_product_tag_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.dtb_product_tag_id_seq', 1, false);
          public          postgres    false    288            �           0    0    dtb_shipping_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.dtb_shipping_id_seq', 3, true);
          public          postgres    false    290            �           0    0    dtb_tag_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.dtb_tag_id_seq', 3, true);
          public          postgres    false    292            �           0    0    dtb_tax_rule_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.dtb_tax_rule_id_seq', 1, true);
          public          postgres    false    294            �           0    0    dtb_template_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.dtb_template_id_seq', 2, true);
          public          postgres    false    296            �           0    0    plg_ec4_momo_config_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.plg_ec4_momo_config_id_seq', 1, false);
          public          postgres    false    299            �           0    0     plg_ec4_momo_transactions_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.plg_ec4_momo_transactions_id_seq', 1, false);
          public          postgres    false    301            �           0    0    plg_related_product_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public.plg_related_product_id_seq', 2, true);
          public          postgres    false    303            �           0    0     plg_sample_payment_config_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.plg_sample_payment_config_id_seq', 1, true);
          public          postgres    false    305            �           2606    17711 <   doctrine_migration_versions doctrine_migration_versions_pkey 
   CONSTRAINT        ALTER TABLE ONLY public.doctrine_migration_versions
    ADD CONSTRAINT doctrine_migration_versions_pkey PRIMARY KEY (version);
 f   ALTER TABLE ONLY public.doctrine_migration_versions DROP CONSTRAINT doctrine_migration_versions_pkey;
       public            postgres    false    298                       2606    16456 *   dtb_authority_role dtb_authority_role_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.dtb_authority_role
    ADD CONSTRAINT dtb_authority_role_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.dtb_authority_role DROP CONSTRAINT dtb_authority_role_pkey;
       public            postgres    false    205                       2606    16498     dtb_base_info dtb_base_info_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.dtb_base_info
    ADD CONSTRAINT dtb_base_info_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.dtb_base_info DROP CONSTRAINT dtb_base_info_pkey;
       public            postgres    false    207            !           2606    16514    dtb_block dtb_block_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.dtb_block
    ADD CONSTRAINT dtb_block_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.dtb_block DROP CONSTRAINT dtb_block_pkey;
       public            postgres    false    209            $           2606    16521 *   dtb_block_position dtb_block_position_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.dtb_block_position
    ADD CONSTRAINT dtb_block_position_pkey PRIMARY KEY (section, block_id, layout_id);
 T   ALTER TABLE ONLY public.dtb_block_position DROP CONSTRAINT dtb_block_position_pkey;
       public            postgres    false    210    210    210            -           2606    16554     dtb_cart_item dtb_cart_item_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.dtb_cart_item
    ADD CONSTRAINT dtb_cart_item_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.dtb_cart_item DROP CONSTRAINT dtb_cart_item_pkey;
       public            postgres    false    214            (           2606    16540    dtb_cart dtb_cart_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.dtb_cart
    ADD CONSTRAINT dtb_cart_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.dtb_cart DROP CONSTRAINT dtb_cart_pkey;
       public            postgres    false    212            1           2606    16567    dtb_category dtb_category_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.dtb_category
    ADD CONSTRAINT dtb_category_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.dtb_category DROP CONSTRAINT dtb_category_pkey;
       public            postgres    false    216            5           2606    16582 *   dtb_class_category dtb_class_category_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.dtb_class_category
    ADD CONSTRAINT dtb_class_category_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.dtb_class_category DROP CONSTRAINT dtb_class_category_pkey;
       public            postgres    false    218            9           2606    16596 "   dtb_class_name dtb_class_name_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.dtb_class_name
    ADD CONSTRAINT dtb_class_name_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.dtb_class_name DROP CONSTRAINT dtb_class_name_pkey;
       public            postgres    false    220            <           2606    16610    dtb_csv dtb_csv_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.dtb_csv
    ADD CONSTRAINT dtb_csv_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.dtb_csv DROP CONSTRAINT dtb_csv_pkey;
       public            postgres    false    222            N           2606    16670 .   dtb_customer_address dtb_customer_address_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.dtb_customer_address
    ADD CONSTRAINT dtb_customer_address_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.dtb_customer_address DROP CONSTRAINT dtb_customer_address_pkey;
       public            postgres    false    226            S           2606    16681 @   dtb_customer_favorite_product dtb_customer_favorite_product_pkey 
   CONSTRAINT     ~   ALTER TABLE ONLY public.dtb_customer_favorite_product
    ADD CONSTRAINT dtb_customer_favorite_product_pkey PRIMARY KEY (id);
 j   ALTER TABLE ONLY public.dtb_customer_favorite_product DROP CONSTRAINT dtb_customer_favorite_product_pkey;
       public            postgres    false    228            E           2606    16640    dtb_customer dtb_customer_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.dtb_customer
    ADD CONSTRAINT dtb_customer_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.dtb_customer DROP CONSTRAINT dtb_customer_pkey;
       public            postgres    false    224            [           2606    16714 0   dtb_delivery_duration dtb_delivery_duration_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.dtb_delivery_duration
    ADD CONSTRAINT dtb_delivery_duration_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.dtb_delivery_duration DROP CONSTRAINT dtb_delivery_duration_pkey;
       public            postgres    false    232            ]           2606    16722 &   dtb_delivery_fee dtb_delivery_fee_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.dtb_delivery_fee
    ADD CONSTRAINT dtb_delivery_fee_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.dtb_delivery_fee DROP CONSTRAINT dtb_delivery_fee_pkey;
       public            postgres    false    234            W           2606    16699    dtb_delivery dtb_delivery_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.dtb_delivery
    ADD CONSTRAINT dtb_delivery_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.dtb_delivery DROP CONSTRAINT dtb_delivery_pkey;
       public            postgres    false    230            a           2606    16736 (   dtb_delivery_time dtb_delivery_time_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.dtb_delivery_time
    ADD CONSTRAINT dtb_delivery_time_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.dtb_delivery_time DROP CONSTRAINT dtb_delivery_time_pkey;
       public            postgres    false    236            d           2606    16749    dtb_layout dtb_layout_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.dtb_layout
    ADD CONSTRAINT dtb_layout_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.dtb_layout DROP CONSTRAINT dtb_layout_pkey;
       public            postgres    false    238            g           2606    16763 &   dtb_mail_history dtb_mail_history_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.dtb_mail_history
    ADD CONSTRAINT dtb_mail_history_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.dtb_mail_history DROP CONSTRAINT dtb_mail_history_pkey;
       public            postgres    false    240            k           2606    16779 (   dtb_mail_template dtb_mail_template_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.dtb_mail_template
    ADD CONSTRAINT dtb_mail_template_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.dtb_mail_template DROP CONSTRAINT dtb_mail_template_pkey;
       public            postgres    false    242            �           2606    16964    dtb_member dtb_member_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.dtb_member
    ADD CONSTRAINT dtb_member_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.dtb_member DROP CONSTRAINT dtb_member_pkey;
       public            postgres    false    265            �           2606    16982    dtb_news dtb_news_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.dtb_news
    ADD CONSTRAINT dtb_news_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.dtb_news DROP CONSTRAINT dtb_news_pkey;
       public            postgres    false    267            �           2606    17006 "   dtb_order_item dtb_order_item_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.dtb_order_item
    ADD CONSTRAINT dtb_order_item_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.dtb_order_item DROP CONSTRAINT dtb_order_item_pkey;
       public            postgres    false    269            �           2606    17030     dtb_order_pdf dtb_order_pdf_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.dtb_order_pdf
    ADD CONSTRAINT dtb_order_pdf_pkey PRIMARY KEY (member_id);
 J   ALTER TABLE ONLY public.dtb_order_pdf DROP CONSTRAINT dtb_order_pdf_pkey;
       public            postgres    false    270            	           2606    16431    dtb_order dtb_order_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.dtb_order
    ADD CONSTRAINT dtb_order_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.dtb_order DROP CONSTRAINT dtb_order_pkey;
       public            postgres    false    203            �           2606    17056 $   dtb_page_layout dtb_page_layout_pkey 
   CONSTRAINT     r   ALTER TABLE ONLY public.dtb_page_layout
    ADD CONSTRAINT dtb_page_layout_pkey PRIMARY KEY (page_id, layout_id);
 N   ALTER TABLE ONLY public.dtb_page_layout DROP CONSTRAINT dtb_page_layout_pkey;
       public            postgres    false    273    273            �           2606    17049    dtb_page dtb_page_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.dtb_page
    ADD CONSTRAINT dtb_page_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.dtb_page DROP CONSTRAINT dtb_page_pkey;
       public            postgres    false    272            �           2606    17083 *   dtb_payment_option dtb_payment_option_pkey 
   CONSTRAINT     }   ALTER TABLE ONLY public.dtb_payment_option
    ADD CONSTRAINT dtb_payment_option_pkey PRIMARY KEY (delivery_id, payment_id);
 T   ALTER TABLE ONLY public.dtb_payment_option DROP CONSTRAINT dtb_payment_option_pkey;
       public            postgres    false    276    276            �           2606    17077    dtb_payment dtb_payment_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.dtb_payment
    ADD CONSTRAINT dtb_payment_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.dtb_payment DROP CONSTRAINT dtb_payment_pkey;
       public            postgres    false    275            �           2606    17098    dtb_plugin dtb_plugin_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.dtb_plugin
    ADD CONSTRAINT dtb_plugin_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.dtb_plugin DROP CONSTRAINT dtb_plugin_pkey;
       public            postgres    false    278            �           2606    17120 .   dtb_product_category dtb_product_category_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_category
    ADD CONSTRAINT dtb_product_category_pkey PRIMARY KEY (product_id, category_id);
 X   ALTER TABLE ONLY public.dtb_product_category DROP CONSTRAINT dtb_product_category_pkey;
       public            postgres    false    281    281            �           2606    17142 (   dtb_product_class dtb_product_class_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.dtb_product_class
    ADD CONSTRAINT dtb_product_class_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.dtb_product_class DROP CONSTRAINT dtb_product_class_pkey;
       public            postgres    false    283            �           2606    17161 (   dtb_product_image dtb_product_image_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.dtb_product_image
    ADD CONSTRAINT dtb_product_image_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.dtb_product_image DROP CONSTRAINT dtb_product_image_pkey;
       public            postgres    false    285            �           2606    17113    dtb_product dtb_product_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.dtb_product
    ADD CONSTRAINT dtb_product_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.dtb_product DROP CONSTRAINT dtb_product_pkey;
       public            postgres    false    280            �           2606    17172 (   dtb_product_stock dtb_product_stock_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.dtb_product_stock
    ADD CONSTRAINT dtb_product_stock_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.dtb_product_stock DROP CONSTRAINT dtb_product_stock_pkey;
       public            postgres    false    287            �           2606    17182 $   dtb_product_tag dtb_product_tag_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.dtb_product_tag
    ADD CONSTRAINT dtb_product_tag_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.dtb_product_tag DROP CONSTRAINT dtb_product_tag_pkey;
       public            postgres    false    289            �           2606    17210    dtb_shipping dtb_shipping_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.dtb_shipping
    ADD CONSTRAINT dtb_shipping_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.dtb_shipping DROP CONSTRAINT dtb_shipping_pkey;
       public            postgres    false    291            �           2606    17226    dtb_tag dtb_tag_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.dtb_tag
    ADD CONSTRAINT dtb_tag_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.dtb_tag DROP CONSTRAINT dtb_tag_pkey;
       public            postgres    false    293            �           2606    17236    dtb_tax_rule dtb_tax_rule_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.dtb_tax_rule
    ADD CONSTRAINT dtb_tax_rule_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.dtb_tax_rule DROP CONSTRAINT dtb_tax_rule_pkey;
       public            postgres    false    295            �           2606    17253    dtb_template dtb_template_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.dtb_template
    ADD CONSTRAINT dtb_template_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.dtb_template DROP CONSTRAINT dtb_template_pkey;
       public            postgres    false    297            n           2606    16788     mtb_authority mtb_authority_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.mtb_authority
    ADD CONSTRAINT mtb_authority_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.mtb_authority DROP CONSTRAINT mtb_authority_pkey;
       public            postgres    false    243            p           2606    16796    mtb_country mtb_country_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.mtb_country
    ADD CONSTRAINT mtb_country_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.mtb_country DROP CONSTRAINT mtb_country_pkey;
       public            postgres    false    244            r           2606    16804    mtb_csv_type mtb_csv_type_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.mtb_csv_type
    ADD CONSTRAINT mtb_csv_type_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.mtb_csv_type DROP CONSTRAINT mtb_csv_type_pkey;
       public            postgres    false    245            t           2606    16812 8   mtb_customer_order_status mtb_customer_order_status_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.mtb_customer_order_status
    ADD CONSTRAINT mtb_customer_order_status_pkey PRIMARY KEY (id);
 b   ALTER TABLE ONLY public.mtb_customer_order_status DROP CONSTRAINT mtb_customer_order_status_pkey;
       public            postgres    false    246            v           2606    16820 ,   mtb_customer_status mtb_customer_status_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.mtb_customer_status
    ADD CONSTRAINT mtb_customer_status_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.mtb_customer_status DROP CONSTRAINT mtb_customer_status_pkey;
       public            postgres    false    247            x           2606    16828 $   mtb_device_type mtb_device_type_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.mtb_device_type
    ADD CONSTRAINT mtb_device_type_pkey PRIMARY KEY (id);
 N   ALTER TABLE ONLY public.mtb_device_type DROP CONSTRAINT mtb_device_type_pkey;
       public            postgres    false    248            z           2606    16836    mtb_job mtb_job_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.mtb_job
    ADD CONSTRAINT mtb_job_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.mtb_job DROP CONSTRAINT mtb_job_pkey;
       public            postgres    false    249            |           2606    16844 ,   mtb_order_item_type mtb_order_item_type_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.mtb_order_item_type
    ADD CONSTRAINT mtb_order_item_type_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.mtb_order_item_type DROP CONSTRAINT mtb_order_item_type_pkey;
       public            postgres    false    250            �           2606    16861 2   mtb_order_status_color mtb_order_status_color_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.mtb_order_status_color
    ADD CONSTRAINT mtb_order_status_color_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.mtb_order_status_color DROP CONSTRAINT mtb_order_status_color_pkey;
       public            postgres    false    252            ~           2606    16853 &   mtb_order_status mtb_order_status_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.mtb_order_status
    ADD CONSTRAINT mtb_order_status_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.mtb_order_status DROP CONSTRAINT mtb_order_status_pkey;
       public            postgres    false    251            �           2606    16869    mtb_page_max mtb_page_max_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.mtb_page_max
    ADD CONSTRAINT mtb_page_max_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.mtb_page_max DROP CONSTRAINT mtb_page_max_pkey;
       public            postgres    false    253            �           2606    16877    mtb_pref mtb_pref_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.mtb_pref
    ADD CONSTRAINT mtb_pref_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.mtb_pref DROP CONSTRAINT mtb_pref_pkey;
       public            postgres    false    254            �           2606    16885 .   mtb_product_list_max mtb_product_list_max_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.mtb_product_list_max
    ADD CONSTRAINT mtb_product_list_max_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.mtb_product_list_max DROP CONSTRAINT mtb_product_list_max_pkey;
       public            postgres    false    255            �           2606    16893 8   mtb_product_list_order_by mtb_product_list_order_by_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.mtb_product_list_order_by
    ADD CONSTRAINT mtb_product_list_order_by_pkey PRIMARY KEY (id);
 b   ALTER TABLE ONLY public.mtb_product_list_order_by DROP CONSTRAINT mtb_product_list_order_by_pkey;
       public            postgres    false    256            �           2606    16901 *   mtb_product_status mtb_product_status_pkey 
   CONSTRAINT     h   ALTER TABLE ONLY public.mtb_product_status
    ADD CONSTRAINT mtb_product_status_pkey PRIMARY KEY (id);
 T   ALTER TABLE ONLY public.mtb_product_status DROP CONSTRAINT mtb_product_status_pkey;
       public            postgres    false    257            �           2606    16909 (   mtb_rounding_type mtb_rounding_type_pkey 
   CONSTRAINT     f   ALTER TABLE ONLY public.mtb_rounding_type
    ADD CONSTRAINT mtb_rounding_type_pkey PRIMARY KEY (id);
 R   ALTER TABLE ONLY public.mtb_rounding_type DROP CONSTRAINT mtb_rounding_type_pkey;
       public            postgres    false    258            �           2606    16917     mtb_sale_type mtb_sale_type_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.mtb_sale_type
    ADD CONSTRAINT mtb_sale_type_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.mtb_sale_type DROP CONSTRAINT mtb_sale_type_pkey;
       public            postgres    false    259            �           2606    16925    mtb_sex mtb_sex_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.mtb_sex
    ADD CONSTRAINT mtb_sex_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.mtb_sex DROP CONSTRAINT mtb_sex_pkey;
       public            postgres    false    260            �           2606    16933 .   mtb_tax_display_type mtb_tax_display_type_pkey 
   CONSTRAINT     l   ALTER TABLE ONLY public.mtb_tax_display_type
    ADD CONSTRAINT mtb_tax_display_type_pkey PRIMARY KEY (id);
 X   ALTER TABLE ONLY public.mtb_tax_display_type DROP CONSTRAINT mtb_tax_display_type_pkey;
       public            postgres    false    261            �           2606    16941    mtb_tax_type mtb_tax_type_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.mtb_tax_type
    ADD CONSTRAINT mtb_tax_type_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.mtb_tax_type DROP CONSTRAINT mtb_tax_type_pkey;
       public            postgres    false    262            �           2606    16949    mtb_work mtb_work_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.mtb_work
    ADD CONSTRAINT mtb_work_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.mtb_work DROP CONSTRAINT mtb_work_pkey;
       public            postgres    false    263            �           2606    17722 ,   plg_ec4_momo_config plg_ec4_momo_config_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.plg_ec4_momo_config
    ADD CONSTRAINT plg_ec4_momo_config_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.plg_ec4_momo_config DROP CONSTRAINT plg_ec4_momo_config_pkey;
       public            postgres    false    300            �           2606    17744 8   plg_ec4_momo_transactions plg_ec4_momo_transactions_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.plg_ec4_momo_transactions
    ADD CONSTRAINT plg_ec4_momo_transactions_pkey PRIMARY KEY (id);
 b   ALTER TABLE ONLY public.plg_ec4_momo_transactions DROP CONSTRAINT plg_ec4_momo_transactions_pkey;
       public            postgres    false    302            �           2606    17757 ,   plg_related_product plg_related_product_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.plg_related_product
    ADD CONSTRAINT plg_related_product_pkey PRIMARY KEY (id);
 V   ALTER TABLE ONLY public.plg_related_product DROP CONSTRAINT plg_related_product_pkey;
       public            postgres    false    304            �           2606    19105 8   plg_sample_payment_config plg_sample_payment_config_pkey 
   CONSTRAINT     v   ALTER TABLE ONLY public.plg_sample_payment_config
    ADD CONSTRAINT plg_sample_payment_config_pkey PRIMARY KEY (id);
 b   ALTER TABLE ONLY public.plg_sample_payment_config DROP CONSTRAINT plg_sample_payment_config_pkey;
       public            postgres    false    306            �           2606    19110 P   plg_sample_payment_cvs_payment_status plg_sample_payment_cvs_payment_status_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.plg_sample_payment_cvs_payment_status
    ADD CONSTRAINT plg_sample_payment_cvs_payment_status_pkey PRIMARY KEY (id);
 z   ALTER TABLE ONLY public.plg_sample_payment_cvs_payment_status DROP CONSTRAINT plg_sample_payment_cvs_payment_status_pkey;
       public            postgres    false    307            �           2606    19115 <   plg_sample_payment_cvs_type plg_sample_payment_cvs_type_pkey 
   CONSTRAINT     z   ALTER TABLE ONLY public.plg_sample_payment_cvs_type
    ADD CONSTRAINT plg_sample_payment_cvs_type_pkey PRIMARY KEY (id);
 f   ALTER TABLE ONLY public.plg_sample_payment_cvs_type DROP CONSTRAINT plg_sample_payment_cvs_type_pkey;
       public            postgres    false    308                       2606    19120 H   plg_sample_payment_payment_status plg_sample_payment_payment_status_pkey 
   CONSTRAINT     �   ALTER TABLE ONLY public.plg_sample_payment_payment_status
    ADD CONSTRAINT plg_sample_payment_payment_status_pkey PRIMARY KEY (id);
 r   ALTER TABLE ONLY public.plg_sample_payment_payment_status DROP CONSTRAINT plg_sample_payment_payment_status_pkey;
       public            postgres    false    309                       1259    16516    device_type_id    INDEX     `   CREATE UNIQUE INDEX device_type_id ON public.dtb_block USING btree (device_type_id, file_name);
 "   DROP INDEX public.device_type_id;
       public            postgres    false    209    209            )           1259    16543    dtb_cart_pre_order_id_idx    INDEX     ]   CREATE UNIQUE INDEX dtb_cart_pre_order_id_idx ON public.dtb_cart USING btree (pre_order_id);
 -   DROP INDEX public.dtb_cart_pre_order_id_idx;
       public            postgres    false    212            *           1259    16542    dtb_cart_update_date_idx    INDEX     T   CREATE INDEX dtb_cart_update_date_idx ON public.dtb_cart USING btree (update_date);
 ,   DROP INDEX public.dtb_cart_update_date_idx;
       public            postgres    false    212            ?           1259    16646    dtb_customer_buy_times_idx    INDEX     X   CREATE INDEX dtb_customer_buy_times_idx ON public.dtb_customer USING btree (buy_times);
 .   DROP INDEX public.dtb_customer_buy_times_idx;
       public            postgres    false    224            @           1259    16647    dtb_customer_buy_total_idx    INDEX     X   CREATE INDEX dtb_customer_buy_total_idx ON public.dtb_customer USING btree (buy_total);
 .   DROP INDEX public.dtb_customer_buy_total_idx;
       public            postgres    false    224            A           1259    16648    dtb_customer_create_date_idx    INDEX     \   CREATE INDEX dtb_customer_create_date_idx ON public.dtb_customer USING btree (create_date);
 0   DROP INDEX public.dtb_customer_create_date_idx;
       public            postgres    false    224            B           1259    16651    dtb_customer_email_idx    INDEX     P   CREATE INDEX dtb_customer_email_idx ON public.dtb_customer USING btree (email);
 *   DROP INDEX public.dtb_customer_email_idx;
       public            postgres    false    224            C           1259    16650    dtb_customer_last_buy_date_idx    INDEX     `   CREATE INDEX dtb_customer_last_buy_date_idx ON public.dtb_customer USING btree (last_buy_date);
 2   DROP INDEX public.dtb_customer_last_buy_date_idx;
       public            postgres    false    224            F           1259    16649    dtb_customer_update_date_idx    INDEX     \   CREATE INDEX dtb_customer_update_date_idx ON public.dtb_customer USING btree (update_date);
 0   DROP INDEX public.dtb_customer_update_date_idx;
       public            postgres    false    224                       1259    16440    dtb_order_email_idx    INDEX     J   CREATE INDEX dtb_order_email_idx ON public.dtb_order USING btree (email);
 '   DROP INDEX public.dtb_order_email_idx;
       public            postgres    false    203                       1259    16441    dtb_order_order_date_idx    INDEX     T   CREATE INDEX dtb_order_order_date_idx ON public.dtb_order USING btree (order_date);
 ,   DROP INDEX public.dtb_order_order_date_idx;
       public            postgres    false    203                       1259    16444    dtb_order_order_no_idx    INDEX     P   CREATE INDEX dtb_order_order_no_idx ON public.dtb_order USING btree (order_no);
 *   DROP INDEX public.dtb_order_order_no_idx;
       public            postgres    false    203                       1259    16442    dtb_order_payment_date_idx    INDEX     X   CREATE INDEX dtb_order_payment_date_idx ON public.dtb_order USING btree (payment_date);
 .   DROP INDEX public.dtb_order_payment_date_idx;
       public            postgres    false    203            
           1259    16445    dtb_order_pre_order_id_idx    INDEX     _   CREATE UNIQUE INDEX dtb_order_pre_order_id_idx ON public.dtb_order USING btree (pre_order_id);
 .   DROP INDEX public.dtb_order_pre_order_id_idx;
       public            postgres    false    203                       1259    16443    dtb_order_update_date_idx    INDEX     V   CREATE INDEX dtb_order_update_date_idx ON public.dtb_order USING btree (update_date);
 -   DROP INDEX public.dtb_order_update_date_idx;
       public            postgres    false    203            �           1259    17051    dtb_page_url_idx    INDEX     D   CREATE INDEX dtb_page_url_idx ON public.dtb_page USING btree (url);
 $   DROP INDEX public.dtb_page_url_idx;
       public            postgres    false    272            �           1259    17149    dtb_product_class_price02_idx    INDEX     ^   CREATE INDEX dtb_product_class_price02_idx ON public.dtb_product_class USING btree (price02);
 1   DROP INDEX public.dtb_product_class_price02_idx;
       public            postgres    false    283            �           1259    17150 +   dtb_product_class_stock_stock_unlimited_idx    INDEX     {   CREATE INDEX dtb_product_class_stock_stock_unlimited_idx ON public.dtb_product_class USING btree (stock, stock_unlimited);
 ?   DROP INDEX public.dtb_product_class_stock_stock_unlimited_idx;
       public            postgres    false    283    283            �           1259    16967    idx_10bc3be661220ea6    INDEX     Q   CREATE INDEX idx_10bc3be661220ea6 ON public.dtb_member USING btree (creator_id);
 (   DROP INDEX public.idx_10bc3be661220ea6;
       public            postgres    false    265            �           1259    16966    idx_10bc3be681ec865b    INDEX     S   CREATE INDEX idx_10bc3be681ec865b ON public.dtb_member USING btree (authority_id);
 (   DROP INDEX public.idx_10bc3be681ec865b;
       public            postgres    false    265            �           1259    16965    idx_10bc3be6bb3453db    INDEX     N   CREATE INDEX idx_10bc3be6bb3453db ON public.dtb_member USING btree (work_id);
 (   DROP INDEX public.idx_10bc3be6bb3453db;
       public            postgres    false    265            :           1259    16597    idx_187c95ad61220ea6    INDEX     U   CREATE INDEX idx_187c95ad61220ea6 ON public.dtb_class_name USING btree (creator_id);
 (   DROP INDEX public.idx_187c95ad61220ea6;
       public            postgres    false    220            �           1259    17145    idx_1a11d1ba248d128    INDEX     _   CREATE INDEX idx_1a11d1ba248d128 ON public.dtb_product_class USING btree (class_category_id1);
 '   DROP INDEX public.idx_1a11d1ba248d128;
       public            postgres    false    283            �           1259    17143    idx_1a11d1ba4584665a    INDEX     X   CREATE INDEX idx_1a11d1ba4584665a ON public.dtb_product_class USING btree (product_id);
 (   DROP INDEX public.idx_1a11d1ba4584665a;
       public            postgres    false    283            �           1259    17148    idx_1a11d1ba61220ea6    INDEX     X   CREATE INDEX idx_1a11d1ba61220ea6 ON public.dtb_product_class USING btree (creator_id);
 (   DROP INDEX public.idx_1a11d1ba61220ea6;
       public            postgres    false    283            �           1259    17146    idx_1a11d1ba9b418092    INDEX     `   CREATE INDEX idx_1a11d1ba9b418092 ON public.dtb_product_class USING btree (class_category_id2);
 (   DROP INDEX public.idx_1a11d1ba9b418092;
       public            postgres    false    283            �           1259    17144    idx_1a11d1bab0524e01    INDEX     Z   CREATE INDEX idx_1a11d1bab0524e01 ON public.dtb_product_class USING btree (sale_type_id);
 (   DROP INDEX public.idx_1a11d1bab0524e01;
       public            postgres    false    283            �           1259    17147    idx_1a11d1baba4269e    INDEX     a   CREATE INDEX idx_1a11d1baba4269e ON public.dtb_product_class USING btree (delivery_duration_id);
 '   DROP INDEX public.idx_1a11d1baba4269e;
       public            postgres    false    283            l           1259    16780    idx_1cb16db261220ea6    INDEX     X   CREATE INDEX idx_1cb16db261220ea6 ON public.dtb_mail_template USING btree (creator_id);
 (   DROP INDEX public.idx_1cb16db261220ea6;
       public            postgres    false    242                       1259    16500    idx_1d3655f4e171ef5f    INDEX     Q   CREATE INDEX idx_1d3655f4e171ef5f ON public.dtb_base_info USING btree (pref_id);
 (   DROP INDEX public.idx_1d3655f4e171ef5f;
       public            postgres    false    207                       1259    16499    idx_1d3655f4f92f3e70    INDEX     T   CREATE INDEX idx_1d3655f4f92f3e70 ON public.dtb_base_info USING btree (country_id);
 (   DROP INDEX public.idx_1d3655f4f92f3e70;
       public            postgres    false    207                       1259    16437    idx_1d66d8074c3a3bb    INDEX     O   CREATE INDEX idx_1d66d8074c3a3bb ON public.dtb_order USING btree (payment_id);
 '   DROP INDEX public.idx_1d66d8074c3a3bb;
       public            postgres    false    203                       1259    16438    idx_1d66d8074ffa550e    INDEX     T   CREATE INDEX idx_1d66d8074ffa550e ON public.dtb_order USING btree (device_type_id);
 (   DROP INDEX public.idx_1d66d8074ffa550e;
       public            postgres    false    203                       1259    16435    idx_1d66d8075a2db2a0    INDEX     L   CREATE INDEX idx_1d66d8075a2db2a0 ON public.dtb_order USING btree (sex_id);
 (   DROP INDEX public.idx_1d66d8075a2db2a0;
       public            postgres    false    203                       1259    19137    idx_1d66d8077ee5bad4    INDEX     `   CREATE INDEX idx_1d66d8077ee5bad4 ON public.dtb_order USING btree (sample_payment_cvs_type_id);
 (   DROP INDEX public.idx_1d66d8077ee5bad4;
       public            postgres    false    203                       1259    16432    idx_1d66d8079395c3f3    INDEX     Q   CREATE INDEX idx_1d66d8079395c3f3 ON public.dtb_order USING btree (customer_id);
 (   DROP INDEX public.idx_1d66d8079395c3f3;
       public            postgres    false    203                       1259    19139    idx_1d66d8079ee36de9    INDEX     j   CREATE INDEX idx_1d66d8079ee36de9 ON public.dtb_order USING btree (sample_payment_cvs_payment_status_id);
 (   DROP INDEX public.idx_1d66d8079ee36de9;
       public            postgres    false    203                       1259    16436    idx_1d66d807be04ea9    INDEX     K   CREATE INDEX idx_1d66d807be04ea9 ON public.dtb_order USING btree (job_id);
 '   DROP INDEX public.idx_1d66d807be04ea9;
       public            postgres    false    203                       1259    16439    idx_1d66d807d7707b45    INDEX     U   CREATE INDEX idx_1d66d807d7707b45 ON public.dtb_order USING btree (order_status_id);
 (   DROP INDEX public.idx_1d66d807d7707b45;
       public            postgres    false    203                       1259    19138    idx_1d66d807e127b1ef    INDEX     f   CREATE INDEX idx_1d66d807e127b1ef ON public.dtb_order USING btree (sample_payment_payment_status_id);
 (   DROP INDEX public.idx_1d66d807e127b1ef;
       public            postgres    false    203                       1259    16434    idx_1d66d807e171ef5f    INDEX     M   CREATE INDEX idx_1d66d807e171ef5f ON public.dtb_order USING btree (pref_id);
 (   DROP INDEX public.idx_1d66d807e171ef5f;
       public            postgres    false    203                       1259    16433    idx_1d66d807f92f3e70    INDEX     P   CREATE INDEX idx_1d66d807f92f3e70 ON public.dtb_order USING btree (country_id);
 (   DROP INDEX public.idx_1d66d807f92f3e70;
       public            postgres    false    203            �           1259    17214    idx_2ebd22ce12136921    INDEX     T   CREATE INDEX idx_2ebd22ce12136921 ON public.dtb_shipping USING btree (delivery_id);
 (   DROP INDEX public.idx_2ebd22ce12136921;
       public            postgres    false    291            �           1259    17215    idx_2ebd22ce61220ea6    INDEX     S   CREATE INDEX idx_2ebd22ce61220ea6 ON public.dtb_shipping USING btree (creator_id);
 (   DROP INDEX public.idx_2ebd22ce61220ea6;
       public            postgres    false    291            �           1259    17211    idx_2ebd22ce8d9f6d38    INDEX     Q   CREATE INDEX idx_2ebd22ce8d9f6d38 ON public.dtb_shipping USING btree (order_id);
 (   DROP INDEX public.idx_2ebd22ce8d9f6d38;
       public            postgres    false    291            �           1259    17213    idx_2ebd22cee171ef5f    INDEX     P   CREATE INDEX idx_2ebd22cee171ef5f ON public.dtb_shipping USING btree (pref_id);
 (   DROP INDEX public.idx_2ebd22cee171ef5f;
       public            postgres    false    291            �           1259    17212    idx_2ebd22cef92f3e70    INDEX     S   CREATE INDEX idx_2ebd22cef92f3e70 ON public.dtb_shipping USING btree (country_id);
 (   DROP INDEX public.idx_2ebd22cef92f3e70;
       public            postgres    false    291            �           1259    17162    idx_3267cc7a4584665a    INDEX     X   CREATE INDEX idx_3267cc7a4584665a ON public.dtb_product_image USING btree (product_id);
 (   DROP INDEX public.idx_3267cc7a4584665a;
       public            postgres    false    285            �           1259    17163    idx_3267cc7a61220ea6    INDEX     X   CREATE INDEX idx_3267cc7a61220ea6 ON public.dtb_product_image USING btree (creator_id);
 (   DROP INDEX public.idx_3267cc7a61220ea6;
       public            postgres    false    285            X           1259    16700    idx_3420d9fa61220ea6    INDEX     S   CREATE INDEX idx_3420d9fa61220ea6 ON public.dtb_delivery USING btree (creator_id);
 (   DROP INDEX public.idx_3420d9fa61220ea6;
       public            postgres    false    230            Y           1259    16701    idx_3420d9fab0524e01    INDEX     U   CREATE INDEX idx_3420d9fab0524e01 ON public.dtb_delivery USING btree (sale_type_id);
 (   DROP INDEX public.idx_3420d9fab0524e01;
       public            postgres    false    230            %           1259    16523    idx_35dcd7318c22aa1a    INDEX     X   CREATE INDEX idx_35dcd7318c22aa1a ON public.dtb_block_position USING btree (layout_id);
 (   DROP INDEX public.idx_35dcd7318c22aa1a;
       public            postgres    false    210            &           1259    16522    idx_35dcd731e9ed820c    INDEX     W   CREATE INDEX idx_35dcd731e9ed820c ON public.dtb_block_position USING btree (block_id);
 (   DROP INDEX public.idx_35dcd731e9ed820c;
       public            postgres    false    210            �           1259    17183    idx_4433e7214584665a    INDEX     V   CREATE INDEX idx_4433e7214584665a ON public.dtb_product_tag USING btree (product_id);
 (   DROP INDEX public.idx_4433e7214584665a;
       public            postgres    false    289            �           1259    17185    idx_4433e72161220ea6    INDEX     V   CREATE INDEX idx_4433e72161220ea6 ON public.dtb_product_tag USING btree (creator_id);
 (   DROP INDEX public.idx_4433e72161220ea6;
       public            postgres    false    289            �           1259    17184    idx_4433e721bad26311    INDEX     R   CREATE INDEX idx_4433e721bad26311 ON public.dtb_product_tag USING btree (tag_id);
 (   DROP INDEX public.idx_4433e721bad26311;
       public            postgres    false    289            h           1259    16765    idx_4870ab1161220ea6    INDEX     W   CREATE INDEX idx_4870ab1161220ea6 ON public.dtb_mail_history USING btree (creator_id);
 (   DROP INDEX public.idx_4870ab1161220ea6;
       public            postgres    false    240            i           1259    16764    idx_4870ab118d9f6d38    INDEX     U   CREATE INDEX idx_4870ab118d9f6d38 ON public.dtb_mail_history USING btree (order_id);
 (   DROP INDEX public.idx_4870ab118d9f6d38;
       public            postgres    false    240            ^           1259    16723    idx_491552412136921    INDEX     W   CREATE INDEX idx_491552412136921 ON public.dtb_delivery_fee USING btree (delivery_id);
 '   DROP INDEX public.idx_491552412136921;
       public            postgres    false    234            _           1259    16724    idx_4915524e171ef5f    INDEX     S   CREATE INDEX idx_4915524e171ef5f ON public.dtb_delivery_fee USING btree (pref_id);
 '   DROP INDEX public.idx_4915524e171ef5f;
       public            postgres    false    234                       1259    16458    idx_4a1f70b161220ea6    INDEX     Y   CREATE INDEX idx_4a1f70b161220ea6 ON public.dtb_authority_role USING btree (creator_id);
 (   DROP INDEX public.idx_4a1f70b161220ea6;
       public            postgres    false    205                       1259    16457    idx_4a1f70b181ec865b    INDEX     [   CREATE INDEX idx_4a1f70b181ec865b ON public.dtb_authority_role USING btree (authority_id);
 (   DROP INDEX public.idx_4a1f70b181ec865b;
       public            postgres    false    205            �           1259    17084    idx_5631540d12136921    INDEX     Z   CREATE INDEX idx_5631540d12136921 ON public.dtb_payment_option USING btree (delivery_id);
 (   DROP INDEX public.idx_5631540d12136921;
       public            postgres    false    276            �           1259    17085    idx_5631540d4c3a3bb    INDEX     X   CREATE INDEX idx_5631540d4c3a3bb ON public.dtb_payment_option USING btree (payment_id);
 '   DROP INDEX public.idx_5631540d4c3a3bb;
       public            postgres    false    276            �           1259    17242    idx_59f696de1bd5c574    INDEX     Y   CREATE INDEX idx_59f696de1bd5c574 ON public.dtb_tax_rule USING btree (rounding_type_id);
 (   DROP INDEX public.idx_59f696de1bd5c574;
       public            postgres    false    295            �           1259    17237    idx_59f696de21b06187    INDEX     Y   CREATE INDEX idx_59f696de21b06187 ON public.dtb_tax_rule USING btree (product_class_id);
 (   DROP INDEX public.idx_59f696de21b06187;
       public            postgres    false    295            �           1259    17241    idx_59f696de4584665a    INDEX     S   CREATE INDEX idx_59f696de4584665a ON public.dtb_tax_rule USING btree (product_id);
 (   DROP INDEX public.idx_59f696de4584665a;
       public            postgres    false    295            �           1259    17238    idx_59f696de61220ea6    INDEX     S   CREATE INDEX idx_59f696de61220ea6 ON public.dtb_tax_rule USING btree (creator_id);
 (   DROP INDEX public.idx_59f696de61220ea6;
       public            postgres    false    295            �           1259    17240    idx_59f696dee171ef5f    INDEX     P   CREATE INDEX idx_59f696dee171ef5f ON public.dtb_tax_rule USING btree (pref_id);
 (   DROP INDEX public.idx_59f696dee171ef5f;
       public            postgres    false    295            �           1259    17239    idx_59f696def92f3e70    INDEX     S   CREATE INDEX idx_59f696def92f3e70 ON public.dtb_tax_rule USING btree (country_id);
 (   DROP INDEX public.idx_59f696def92f3e70;
       public            postgres    false    295            e           1259    16750    idx_5a62aa7c4ffa550e    INDEX     U   CREATE INDEX idx_5a62aa7c4ffa550e ON public.dtb_layout USING btree (device_type_id);
 (   DROP INDEX public.idx_5a62aa7c4ffa550e;
       public            postgres    false    238            2           1259    16569    idx_5ed2c2b61220ea6    INDEX     R   CREATE INDEX idx_5ed2c2b61220ea6 ON public.dtb_category USING btree (creator_id);
 '   DROP INDEX public.idx_5ed2c2b61220ea6;
       public            postgres    false    216            3           1259    16568    idx_5ed2c2b796a8f92    INDEX     Z   CREATE INDEX idx_5ed2c2b796a8f92 ON public.dtb_category USING btree (parent_category_id);
 '   DROP INDEX public.idx_5ed2c2b796a8f92;
       public            postgres    false    216            "           1259    16515    idx_6b54dcbd4ffa550e    INDEX     T   CREATE INDEX idx_6b54dcbd4ffa550e ON public.dtb_block USING btree (device_type_id);
 (   DROP INDEX public.idx_6b54dcbd4ffa550e;
       public            postgres    false    209            O           1259    16671    idx_6c38c0f89395c3f3    INDEX     \   CREATE INDEX idx_6c38c0f89395c3f3 ON public.dtb_customer_address USING btree (customer_id);
 (   DROP INDEX public.idx_6c38c0f89395c3f3;
       public            postgres    false    226            P           1259    16673    idx_6c38c0f8e171ef5f    INDEX     X   CREATE INDEX idx_6c38c0f8e171ef5f ON public.dtb_customer_address USING btree (pref_id);
 (   DROP INDEX public.idx_6c38c0f8e171ef5f;
       public            postgres    false    226            Q           1259    16672    idx_6c38c0f8f92f3e70    INDEX     [   CREATE INDEX idx_6c38c0f8f92f3e70 ON public.dtb_customer_address USING btree (country_id);
 (   DROP INDEX public.idx_6c38c0f8f92f3e70;
       public            postgres    false    226            �           1259    17758    idx_77b090f74584665a    INDEX     Z   CREATE INDEX idx_77b090f74584665a ON public.plg_related_product USING btree (product_id);
 (   DROP INDEX public.idx_77b090f74584665a;
       public            postgres    false    304            �           1259    17759    idx_77b090f7a15b9831    INDEX     `   CREATE INDEX idx_77b090f7a15b9831 ON public.plg_related_product USING btree (child_product_id);
 (   DROP INDEX public.idx_77b090f7a15b9831;
       public            postgres    false    304            �           1259    17078    idx_7aff628f61220ea6    INDEX     R   CREATE INDEX idx_7aff628f61220ea6 ON public.dtb_payment USING btree (creator_id);
 (   DROP INDEX public.idx_7aff628f61220ea6;
       public            postgres    false    275            G           1259    16642    idx_8298bbe35a2db2a0    INDEX     O   CREATE INDEX idx_8298bbe35a2db2a0 ON public.dtb_customer USING btree (sex_id);
 (   DROP INDEX public.idx_8298bbe35a2db2a0;
       public            postgres    false    224            H           1259    16643    idx_8298bbe3be04ea9    INDEX     N   CREATE INDEX idx_8298bbe3be04ea9 ON public.dtb_customer USING btree (job_id);
 '   DROP INDEX public.idx_8298bbe3be04ea9;
       public            postgres    false    224            I           1259    16641    idx_8298bbe3c00af8a7    INDEX     [   CREATE INDEX idx_8298bbe3c00af8a7 ON public.dtb_customer USING btree (customer_status_id);
 (   DROP INDEX public.idx_8298bbe3c00af8a7;
       public            postgres    false    224            J           1259    16645    idx_8298bbe3e171ef5f    INDEX     P   CREATE INDEX idx_8298bbe3e171ef5f ON public.dtb_customer USING btree (pref_id);
 (   DROP INDEX public.idx_8298bbe3e171ef5f;
       public            postgres    false    224            K           1259    16644    idx_8298bbe3f92f3e70    INDEX     S   CREATE INDEX idx_8298bbe3f92f3e70 ON public.dtb_customer USING btree (country_id);
 (   DROP INDEX public.idx_8298bbe3f92f3e70;
       public            postgres    false    224            �           1259    17254    idx_94c12a694ffa550e    INDEX     W   CREATE INDEX idx_94c12a694ffa550e ON public.dtb_template USING btree (device_type_id);
 (   DROP INDEX public.idx_94c12a694ffa550e;
       public            postgres    false    297            6           1259    16584    idx_9b0d1dba61220ea6    INDEX     Y   CREATE INDEX idx_9b0d1dba61220ea6 ON public.dtb_class_category USING btree (creator_id);
 (   DROP INDEX public.idx_9b0d1dba61220ea6;
       public            postgres    false    218            7           1259    16583    idx_9b0d1dbab462fb2a    INDEX     \   CREATE INDEX idx_9b0d1dbab462fb2a ON public.dtb_class_category USING btree (class_name_id);
 (   DROP INDEX public.idx_9b0d1dbab462fb2a;
       public            postgres    false    218            �           1259    17011    idx_a0c8c3ed1bd5c574    INDEX     [   CREATE INDEX idx_a0c8c3ed1bd5c574 ON public.dtb_order_item USING btree (rounding_type_id);
 (   DROP INDEX public.idx_a0c8c3ed1bd5c574;
       public            postgres    false    269            �           1259    17009    idx_a0c8c3ed21b06187    INDEX     [   CREATE INDEX idx_a0c8c3ed21b06187 ON public.dtb_order_item USING btree (product_class_id);
 (   DROP INDEX public.idx_a0c8c3ed21b06187;
       public            postgres    false    269            �           1259    17008    idx_a0c8c3ed4584665a    INDEX     U   CREATE INDEX idx_a0c8c3ed4584665a ON public.dtb_order_item USING btree (product_id);
 (   DROP INDEX public.idx_a0c8c3ed4584665a;
       public            postgres    false    269            �           1259    17010    idx_a0c8c3ed4887f3f8    INDEX     V   CREATE INDEX idx_a0c8c3ed4887f3f8 ON public.dtb_order_item USING btree (shipping_id);
 (   DROP INDEX public.idx_a0c8c3ed4887f3f8;
       public            postgres    false    269            �           1259    17012    idx_a0c8c3ed84042c99    INDEX     V   CREATE INDEX idx_a0c8c3ed84042c99 ON public.dtb_order_item USING btree (tax_type_id);
 (   DROP INDEX public.idx_a0c8c3ed84042c99;
       public            postgres    false    269            �           1259    17007    idx_a0c8c3ed8d9f6d38    INDEX     S   CREATE INDEX idx_a0c8c3ed8d9f6d38 ON public.dtb_order_item USING btree (order_id);
 (   DROP INDEX public.idx_a0c8c3ed8d9f6d38;
       public            postgres    false    269            �           1259    17013    idx_a0c8c3eda2505856    INDEX     ^   CREATE INDEX idx_a0c8c3eda2505856 ON public.dtb_order_item USING btree (tax_display_type_id);
 (   DROP INDEX public.idx_a0c8c3eda2505856;
       public            postgres    false    269            �           1259    17014    idx_a0c8c3edcad13ead    INDEX     ]   CREATE INDEX idx_a0c8c3edcad13ead ON public.dtb_order_item USING btree (order_item_type_id);
 (   DROP INDEX public.idx_a0c8c3edcad13ead;
       public            postgres    false    269            .           1259    16556    idx_b0228f741ad5cdbf    INDEX     Q   CREATE INDEX idx_b0228f741ad5cdbf ON public.dtb_cart_item USING btree (cart_id);
 (   DROP INDEX public.idx_b0228f741ad5cdbf;
       public            postgres    false    214            /           1259    16555    idx_b0228f7421b06187    INDEX     Z   CREATE INDEX idx_b0228f7421b06187 ON public.dtb_cart_item USING btree (product_class_id);
 (   DROP INDEX public.idx_b0228f7421b06187;
       public            postgres    false    214            �           1259    17122    idx_b057789112469de2    INDEX     \   CREATE INDEX idx_b057789112469de2 ON public.dtb_product_category USING btree (category_id);
 (   DROP INDEX public.idx_b057789112469de2;
       public            postgres    false    281            �           1259    17121    idx_b05778914584665a    INDEX     [   CREATE INDEX idx_b05778914584665a ON public.dtb_product_category USING btree (product_id);
 (   DROP INDEX public.idx_b05778914584665a;
       public            postgres    false    281            �           1259    17173    idx_bc6c9e4521b06187    INDEX     ^   CREATE INDEX idx_bc6c9e4521b06187 ON public.dtb_product_stock USING btree (product_class_id);
 (   DROP INDEX public.idx_bc6c9e4521b06187;
       public            postgres    false    287            �           1259    17174    idx_bc6c9e4561220ea6    INDEX     X   CREATE INDEX idx_bc6c9e4561220ea6 ON public.dtb_product_stock USING btree (creator_id);
 (   DROP INDEX public.idx_bc6c9e4561220ea6;
       public            postgres    false    287            �           1259    17115    idx_c49de22f557b630    INDEX     X   CREATE INDEX idx_c49de22f557b630 ON public.dtb_product USING btree (product_status_id);
 '   DROP INDEX public.idx_c49de22f557b630;
       public            postgres    false    280            �           1259    17114    idx_c49de22f61220ea6    INDEX     R   CREATE INDEX idx_c49de22f61220ea6 ON public.dtb_product USING btree (creator_id);
 (   DROP INDEX public.idx_c49de22f61220ea6;
       public            postgres    false    280            �           1259    17050    idx_e3951a67d0618e8c    INDEX     S   CREATE INDEX idx_e3951a67d0618e8c ON public.dtb_page USING btree (master_page_id);
 (   DROP INDEX public.idx_e3951a67d0618e8c;
       public            postgres    false    272            b           1259    16737    idx_e80ee3a612136921    INDEX     Y   CREATE INDEX idx_e80ee3a612136921 ON public.dtb_delivery_time USING btree (delivery_id);
 (   DROP INDEX public.idx_e80ee3a612136921;
       public            postgres    false    236            �           1259    16983    idx_ea4c351761220ea6    INDEX     O   CREATE INDEX idx_ea4c351761220ea6 ON public.dtb_news USING btree (creator_id);
 (   DROP INDEX public.idx_ea4c351761220ea6;
       public            postgres    false    267            T           1259    16683    idx_ed6313834584665a    INDEX     d   CREATE INDEX idx_ed6313834584665a ON public.dtb_customer_favorite_product USING btree (product_id);
 (   DROP INDEX public.idx_ed6313834584665a;
       public            postgres    false    228            U           1259    16682    idx_ed6313839395c3f3    INDEX     e   CREATE INDEX idx_ed6313839395c3f3 ON public.dtb_customer_favorite_product USING btree (customer_id);
 (   DROP INDEX public.idx_ed6313839395c3f3;
       public            postgres    false    228            �           1259    17058    idx_f27999418c22aa1a    INDEX     U   CREATE INDEX idx_f27999418c22aa1a ON public.dtb_page_layout USING btree (layout_id);
 (   DROP INDEX public.idx_f27999418c22aa1a;
       public            postgres    false    273            �           1259    17057    idx_f2799941c4663e4    INDEX     R   CREATE INDEX idx_f2799941c4663e4 ON public.dtb_page_layout USING btree (page_id);
 '   DROP INDEX public.idx_f2799941c4663e4;
       public            postgres    false    273            =           1259    16612    idx_f55f48c361220ea6    INDEX     N   CREATE INDEX idx_f55f48c361220ea6 ON public.dtb_csv USING btree (creator_id);
 (   DROP INDEX public.idx_f55f48c361220ea6;
       public            postgres    false    222            >           1259    16611    idx_f55f48c3e8507796    INDEX     O   CREATE INDEX idx_f55f48c3e8507796 ON public.dtb_csv USING btree (csv_type_id);
 (   DROP INDEX public.idx_f55f48c3e8507796;
       public            postgres    false    222            +           1259    16541    idx_fc3c24f09395c3f3    INDEX     P   CREATE INDEX idx_fc3c24f09395c3f3 ON public.dtb_cart USING btree (customer_id);
 (   DROP INDEX public.idx_fc3c24f09395c3f3;
       public            postgres    false    212            L           1259    16652 
   secret_key    INDEX     P   CREATE UNIQUE INDEX secret_key ON public.dtb_customer USING btree (secret_key);
    DROP INDEX public.secret_key;
       public            postgres    false    224            �           1259    17745    uniq_ca3910eb8d9f6d38    INDEX     f   CREATE UNIQUE INDEX uniq_ca3910eb8d9f6d38 ON public.plg_ec4_momo_transactions USING btree (order_id);
 )   DROP INDEX public.uniq_ca3910eb8d9f6d38;
       public            postgres    false    302            2           2606    17480    dtb_member fk_10bc3be661220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_member
    ADD CONSTRAINT fk_10bc3be661220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 H   ALTER TABLE ONLY public.dtb_member DROP CONSTRAINT fk_10bc3be661220ea6;
       public          postgres    false    3480    265    265            1           2606    17475    dtb_member fk_10bc3be681ec865b    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_member
    ADD CONSTRAINT fk_10bc3be681ec865b FOREIGN KEY (authority_id) REFERENCES public.mtb_authority(id);
 H   ALTER TABLE ONLY public.dtb_member DROP CONSTRAINT fk_10bc3be681ec865b;
       public          postgres    false    265    3438    243            0           2606    17470    dtb_member fk_10bc3be6bb3453db    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_member
    ADD CONSTRAINT fk_10bc3be6bb3453db FOREIGN KEY (work_id) REFERENCES public.mtb_work(id);
 H   ALTER TABLE ONLY public.dtb_member DROP CONSTRAINT fk_10bc3be6bb3453db;
       public          postgres    false    3478    265    263                       2606    17360 "   dtb_class_name fk_187c95ad61220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_class_name
    ADD CONSTRAINT fk_187c95ad61220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 L   ALTER TABLE ONLY public.dtb_class_name DROP CONSTRAINT fk_187c95ad61220ea6;
       public          postgres    false    3480    265    220            H           2606    17590 $   dtb_product_class fk_1a11d1ba248d128    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_class
    ADD CONSTRAINT fk_1a11d1ba248d128 FOREIGN KEY (class_category_id1) REFERENCES public.dtb_class_category(id);
 N   ALTER TABLE ONLY public.dtb_product_class DROP CONSTRAINT fk_1a11d1ba248d128;
       public          postgres    false    283    218    3381            F           2606    17580 %   dtb_product_class fk_1a11d1ba4584665a    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_class
    ADD CONSTRAINT fk_1a11d1ba4584665a FOREIGN KEY (product_id) REFERENCES public.dtb_product(id);
 O   ALTER TABLE ONLY public.dtb_product_class DROP CONSTRAINT fk_1a11d1ba4584665a;
       public          postgres    false    283    280    3517            K           2606    17605 %   dtb_product_class fk_1a11d1ba61220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_class
    ADD CONSTRAINT fk_1a11d1ba61220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 O   ALTER TABLE ONLY public.dtb_product_class DROP CONSTRAINT fk_1a11d1ba61220ea6;
       public          postgres    false    283    3480    265            I           2606    17595 %   dtb_product_class fk_1a11d1ba9b418092    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_class
    ADD CONSTRAINT fk_1a11d1ba9b418092 FOREIGN KEY (class_category_id2) REFERENCES public.dtb_class_category(id);
 O   ALTER TABLE ONLY public.dtb_product_class DROP CONSTRAINT fk_1a11d1ba9b418092;
       public          postgres    false    283    218    3381            G           2606    17585 %   dtb_product_class fk_1a11d1bab0524e01    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_class
    ADD CONSTRAINT fk_1a11d1bab0524e01 FOREIGN KEY (sale_type_id) REFERENCES public.mtb_sale_type(id);
 O   ALTER TABLE ONLY public.dtb_product_class DROP CONSTRAINT fk_1a11d1bab0524e01;
       public          postgres    false    283    259    3470            J           2606    17600 $   dtb_product_class fk_1a11d1baba4269e    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_class
    ADD CONSTRAINT fk_1a11d1baba4269e FOREIGN KEY (delivery_duration_id) REFERENCES public.dtb_delivery_duration(id);
 N   ALTER TABLE ONLY public.dtb_product_class DROP CONSTRAINT fk_1a11d1baba4269e;
       public          postgres    false    283    3419    232            /           2606    17465 %   dtb_mail_template fk_1cb16db261220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_mail_template
    ADD CONSTRAINT fk_1cb16db261220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 O   ALTER TABLE ONLY public.dtb_mail_template DROP CONSTRAINT fk_1cb16db261220ea6;
       public          postgres    false    3480    265    242                       2606    17305 !   dtb_base_info fk_1d3655f4e171ef5f    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_base_info
    ADD CONSTRAINT fk_1d3655f4e171ef5f FOREIGN KEY (pref_id) REFERENCES public.mtb_pref(id);
 K   ALTER TABLE ONLY public.dtb_base_info DROP CONSTRAINT fk_1d3655f4e171ef5f;
       public          postgres    false    3460    207    254                       2606    17300 !   dtb_base_info fk_1d3655f4f92f3e70    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_base_info
    ADD CONSTRAINT fk_1d3655f4f92f3e70 FOREIGN KEY (country_id) REFERENCES public.mtb_country(id);
 K   ALTER TABLE ONLY public.dtb_base_info DROP CONSTRAINT fk_1d3655f4f92f3e70;
       public          postgres    false    207    3440    244                       2606    17280    dtb_order fk_1d66d8074c3a3bb    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order
    ADD CONSTRAINT fk_1d66d8074c3a3bb FOREIGN KEY (payment_id) REFERENCES public.dtb_payment(id);
 F   ALTER TABLE ONLY public.dtb_order DROP CONSTRAINT fk_1d66d8074c3a3bb;
       public          postgres    false    275    203    3508                       2606    17285    dtb_order fk_1d66d8074ffa550e    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order
    ADD CONSTRAINT fk_1d66d8074ffa550e FOREIGN KEY (device_type_id) REFERENCES public.mtb_device_type(id);
 G   ALTER TABLE ONLY public.dtb_order DROP CONSTRAINT fk_1d66d8074ffa550e;
       public          postgres    false    203    248    3448                       2606    17270    dtb_order fk_1d66d8075a2db2a0    FK CONSTRAINT     }   ALTER TABLE ONLY public.dtb_order
    ADD CONSTRAINT fk_1d66d8075a2db2a0 FOREIGN KEY (sex_id) REFERENCES public.mtb_sex(id);
 G   ALTER TABLE ONLY public.dtb_order DROP CONSTRAINT fk_1d66d8075a2db2a0;
       public          postgres    false    260    203    3472            	           2606    19122    dtb_order fk_1d66d8077ee5bad4    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order
    ADD CONSTRAINT fk_1d66d8077ee5bad4 FOREIGN KEY (sample_payment_cvs_type_id) REFERENCES public.plg_sample_payment_cvs_type(id);
 G   ALTER TABLE ONLY public.dtb_order DROP CONSTRAINT fk_1d66d8077ee5bad4;
       public          postgres    false    308    203    3583                       2606    17255    dtb_order fk_1d66d8079395c3f3    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order
    ADD CONSTRAINT fk_1d66d8079395c3f3 FOREIGN KEY (customer_id) REFERENCES public.dtb_customer(id);
 G   ALTER TABLE ONLY public.dtb_order DROP CONSTRAINT fk_1d66d8079395c3f3;
       public          postgres    false    203    224    3397                       2606    19132    dtb_order fk_1d66d8079ee36de9    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order
    ADD CONSTRAINT fk_1d66d8079ee36de9 FOREIGN KEY (sample_payment_cvs_payment_status_id) REFERENCES public.plg_sample_payment_cvs_payment_status(id);
 G   ALTER TABLE ONLY public.dtb_order DROP CONSTRAINT fk_1d66d8079ee36de9;
       public          postgres    false    3581    307    203                       2606    17275    dtb_order fk_1d66d807be04ea9    FK CONSTRAINT     |   ALTER TABLE ONLY public.dtb_order
    ADD CONSTRAINT fk_1d66d807be04ea9 FOREIGN KEY (job_id) REFERENCES public.mtb_job(id);
 F   ALTER TABLE ONLY public.dtb_order DROP CONSTRAINT fk_1d66d807be04ea9;
       public          postgres    false    249    203    3450            
           2606    19127    dtb_order fk_1d66d807e127b1ef    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order
    ADD CONSTRAINT fk_1d66d807e127b1ef FOREIGN KEY (sample_payment_payment_status_id) REFERENCES public.plg_sample_payment_payment_status(id);
 G   ALTER TABLE ONLY public.dtb_order DROP CONSTRAINT fk_1d66d807e127b1ef;
       public          postgres    false    3585    309    203                       2606    17265    dtb_order fk_1d66d807e171ef5f    FK CONSTRAINT        ALTER TABLE ONLY public.dtb_order
    ADD CONSTRAINT fk_1d66d807e171ef5f FOREIGN KEY (pref_id) REFERENCES public.mtb_pref(id);
 G   ALTER TABLE ONLY public.dtb_order DROP CONSTRAINT fk_1d66d807e171ef5f;
       public          postgres    false    254    203    3460                       2606    17260    dtb_order fk_1d66d807f92f3e70    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order
    ADD CONSTRAINT fk_1d66d807f92f3e70 FOREIGN KEY (country_id) REFERENCES public.mtb_country(id);
 G   ALTER TABLE ONLY public.dtb_order DROP CONSTRAINT fk_1d66d807f92f3e70;
       public          postgres    false    244    203    3440            V           2606    17660     dtb_shipping fk_2ebd22ce12136921    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_shipping
    ADD CONSTRAINT fk_2ebd22ce12136921 FOREIGN KEY (delivery_id) REFERENCES public.dtb_delivery(id);
 J   ALTER TABLE ONLY public.dtb_shipping DROP CONSTRAINT fk_2ebd22ce12136921;
       public          postgres    false    230    291    3415            W           2606    17665     dtb_shipping fk_2ebd22ce61220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_shipping
    ADD CONSTRAINT fk_2ebd22ce61220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 J   ALTER TABLE ONLY public.dtb_shipping DROP CONSTRAINT fk_2ebd22ce61220ea6;
       public          postgres    false    291    3480    265            S           2606    17645     dtb_shipping fk_2ebd22ce8d9f6d38    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_shipping
    ADD CONSTRAINT fk_2ebd22ce8d9f6d38 FOREIGN KEY (order_id) REFERENCES public.dtb_order(id);
 J   ALTER TABLE ONLY public.dtb_shipping DROP CONSTRAINT fk_2ebd22ce8d9f6d38;
       public          postgres    false    3337    203    291            U           2606    17655     dtb_shipping fk_2ebd22cee171ef5f    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_shipping
    ADD CONSTRAINT fk_2ebd22cee171ef5f FOREIGN KEY (pref_id) REFERENCES public.mtb_pref(id);
 J   ALTER TABLE ONLY public.dtb_shipping DROP CONSTRAINT fk_2ebd22cee171ef5f;
       public          postgres    false    254    3460    291            T           2606    17650     dtb_shipping fk_2ebd22cef92f3e70    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_shipping
    ADD CONSTRAINT fk_2ebd22cef92f3e70 FOREIGN KEY (country_id) REFERENCES public.mtb_country(id);
 J   ALTER TABLE ONLY public.dtb_shipping DROP CONSTRAINT fk_2ebd22cef92f3e70;
       public          postgres    false    3440    291    244            L           2606    17610 %   dtb_product_image fk_3267cc7a4584665a    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_image
    ADD CONSTRAINT fk_3267cc7a4584665a FOREIGN KEY (product_id) REFERENCES public.dtb_product(id);
 O   ALTER TABLE ONLY public.dtb_product_image DROP CONSTRAINT fk_3267cc7a4584665a;
       public          postgres    false    280    285    3517            M           2606    17615 %   dtb_product_image fk_3267cc7a61220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_image
    ADD CONSTRAINT fk_3267cc7a61220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 O   ALTER TABLE ONLY public.dtb_product_image DROP CONSTRAINT fk_3267cc7a61220ea6;
       public          postgres    false    265    285    3480            '           2606    17425     dtb_delivery fk_3420d9fa61220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_delivery
    ADD CONSTRAINT fk_3420d9fa61220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 J   ALTER TABLE ONLY public.dtb_delivery DROP CONSTRAINT fk_3420d9fa61220ea6;
       public          postgres    false    230    3480    265            (           2606    17430     dtb_delivery fk_3420d9fab0524e01    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_delivery
    ADD CONSTRAINT fk_3420d9fab0524e01 FOREIGN KEY (sale_type_id) REFERENCES public.mtb_sale_type(id);
 J   ALTER TABLE ONLY public.dtb_delivery DROP CONSTRAINT fk_3420d9fab0524e01;
       public          postgres    false    3470    259    230                       2606    17320 &   dtb_block_position fk_35dcd7318c22aa1a    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_block_position
    ADD CONSTRAINT fk_35dcd7318c22aa1a FOREIGN KEY (layout_id) REFERENCES public.dtb_layout(id);
 P   ALTER TABLE ONLY public.dtb_block_position DROP CONSTRAINT fk_35dcd7318c22aa1a;
       public          postgres    false    238    3428    210                       2606    17315 &   dtb_block_position fk_35dcd731e9ed820c    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_block_position
    ADD CONSTRAINT fk_35dcd731e9ed820c FOREIGN KEY (block_id) REFERENCES public.dtb_block(id);
 P   ALTER TABLE ONLY public.dtb_block_position DROP CONSTRAINT fk_35dcd731e9ed820c;
       public          postgres    false    209    210    3361            P           2606    17630 #   dtb_product_tag fk_4433e7214584665a    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_tag
    ADD CONSTRAINT fk_4433e7214584665a FOREIGN KEY (product_id) REFERENCES public.dtb_product(id);
 M   ALTER TABLE ONLY public.dtb_product_tag DROP CONSTRAINT fk_4433e7214584665a;
       public          postgres    false    3517    289    280            R           2606    17640 #   dtb_product_tag fk_4433e72161220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_tag
    ADD CONSTRAINT fk_4433e72161220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 M   ALTER TABLE ONLY public.dtb_product_tag DROP CONSTRAINT fk_4433e72161220ea6;
       public          postgres    false    265    3480    289            Q           2606    17635 #   dtb_product_tag fk_4433e721bad26311    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_tag
    ADD CONSTRAINT fk_4433e721bad26311 FOREIGN KEY (tag_id) REFERENCES public.dtb_tag(id);
 M   ALTER TABLE ONLY public.dtb_product_tag DROP CONSTRAINT fk_4433e721bad26311;
       public          postgres    false    3555    289    293            .           2606    17460 $   dtb_mail_history fk_4870ab1161220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_mail_history
    ADD CONSTRAINT fk_4870ab1161220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 N   ALTER TABLE ONLY public.dtb_mail_history DROP CONSTRAINT fk_4870ab1161220ea6;
       public          postgres    false    3480    265    240            -           2606    17455 $   dtb_mail_history fk_4870ab118d9f6d38    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_mail_history
    ADD CONSTRAINT fk_4870ab118d9f6d38 FOREIGN KEY (order_id) REFERENCES public.dtb_order(id);
 N   ALTER TABLE ONLY public.dtb_mail_history DROP CONSTRAINT fk_4870ab118d9f6d38;
       public          postgres    false    3337    203    240            )           2606    17435 #   dtb_delivery_fee fk_491552412136921    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_delivery_fee
    ADD CONSTRAINT fk_491552412136921 FOREIGN KEY (delivery_id) REFERENCES public.dtb_delivery(id);
 M   ALTER TABLE ONLY public.dtb_delivery_fee DROP CONSTRAINT fk_491552412136921;
       public          postgres    false    3415    234    230            *           2606    17440 #   dtb_delivery_fee fk_4915524e171ef5f    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_delivery_fee
    ADD CONSTRAINT fk_4915524e171ef5f FOREIGN KEY (pref_id) REFERENCES public.mtb_pref(id);
 M   ALTER TABLE ONLY public.dtb_delivery_fee DROP CONSTRAINT fk_4915524e171ef5f;
       public          postgres    false    254    3460    234                       2606    17295 &   dtb_authority_role fk_4a1f70b161220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_authority_role
    ADD CONSTRAINT fk_4a1f70b161220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 P   ALTER TABLE ONLY public.dtb_authority_role DROP CONSTRAINT fk_4a1f70b161220ea6;
       public          postgres    false    3480    205    265                       2606    17290 &   dtb_authority_role fk_4a1f70b181ec865b    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_authority_role
    ADD CONSTRAINT fk_4a1f70b181ec865b FOREIGN KEY (authority_id) REFERENCES public.mtb_authority(id);
 P   ALTER TABLE ONLY public.dtb_authority_role DROP CONSTRAINT fk_4a1f70b181ec865b;
       public          postgres    false    243    3438    205            @           2606    17550 &   dtb_payment_option fk_5631540d12136921    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_payment_option
    ADD CONSTRAINT fk_5631540d12136921 FOREIGN KEY (delivery_id) REFERENCES public.dtb_delivery(id);
 P   ALTER TABLE ONLY public.dtb_payment_option DROP CONSTRAINT fk_5631540d12136921;
       public          postgres    false    230    3415    276            A           2606    17555 %   dtb_payment_option fk_5631540d4c3a3bb    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_payment_option
    ADD CONSTRAINT fk_5631540d4c3a3bb FOREIGN KEY (payment_id) REFERENCES public.dtb_payment(id);
 O   ALTER TABLE ONLY public.dtb_payment_option DROP CONSTRAINT fk_5631540d4c3a3bb;
       public          postgres    false    275    3508    276            ]           2606    17695     dtb_tax_rule fk_59f696de1bd5c574    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_tax_rule
    ADD CONSTRAINT fk_59f696de1bd5c574 FOREIGN KEY (rounding_type_id) REFERENCES public.mtb_rounding_type(id);
 J   ALTER TABLE ONLY public.dtb_tax_rule DROP CONSTRAINT fk_59f696de1bd5c574;
       public          postgres    false    258    295    3468            X           2606    17670     dtb_tax_rule fk_59f696de21b06187    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_tax_rule
    ADD CONSTRAINT fk_59f696de21b06187 FOREIGN KEY (product_class_id) REFERENCES public.dtb_product_class(id);
 J   ALTER TABLE ONLY public.dtb_tax_rule DROP CONSTRAINT fk_59f696de21b06187;
       public          postgres    false    3525    295    283            \           2606    17690     dtb_tax_rule fk_59f696de4584665a    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_tax_rule
    ADD CONSTRAINT fk_59f696de4584665a FOREIGN KEY (product_id) REFERENCES public.dtb_product(id);
 J   ALTER TABLE ONLY public.dtb_tax_rule DROP CONSTRAINT fk_59f696de4584665a;
       public          postgres    false    280    295    3517            Y           2606    17675     dtb_tax_rule fk_59f696de61220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_tax_rule
    ADD CONSTRAINT fk_59f696de61220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 J   ALTER TABLE ONLY public.dtb_tax_rule DROP CONSTRAINT fk_59f696de61220ea6;
       public          postgres    false    3480    295    265            [           2606    17685     dtb_tax_rule fk_59f696dee171ef5f    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_tax_rule
    ADD CONSTRAINT fk_59f696dee171ef5f FOREIGN KEY (pref_id) REFERENCES public.mtb_pref(id);
 J   ALTER TABLE ONLY public.dtb_tax_rule DROP CONSTRAINT fk_59f696dee171ef5f;
       public          postgres    false    254    295    3460            Z           2606    17680     dtb_tax_rule fk_59f696def92f3e70    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_tax_rule
    ADD CONSTRAINT fk_59f696def92f3e70 FOREIGN KEY (country_id) REFERENCES public.mtb_country(id);
 J   ALTER TABLE ONLY public.dtb_tax_rule DROP CONSTRAINT fk_59f696def92f3e70;
       public          postgres    false    3440    295    244            ,           2606    17450    dtb_layout fk_5a62aa7c4ffa550e    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_layout
    ADD CONSTRAINT fk_5a62aa7c4ffa550e FOREIGN KEY (device_type_id) REFERENCES public.mtb_device_type(id);
 H   ALTER TABLE ONLY public.dtb_layout DROP CONSTRAINT fk_5a62aa7c4ffa550e;
       public          postgres    false    3448    248    238                       2606    17345    dtb_category fk_5ed2c2b61220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_category
    ADD CONSTRAINT fk_5ed2c2b61220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 I   ALTER TABLE ONLY public.dtb_category DROP CONSTRAINT fk_5ed2c2b61220ea6;
       public          postgres    false    3480    265    216                       2606    17340    dtb_category fk_5ed2c2b796a8f92    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_category
    ADD CONSTRAINT fk_5ed2c2b796a8f92 FOREIGN KEY (parent_category_id) REFERENCES public.dtb_category(id);
 I   ALTER TABLE ONLY public.dtb_category DROP CONSTRAINT fk_5ed2c2b796a8f92;
       public          postgres    false    3377    216    216                       2606    17310    dtb_block fk_6b54dcbd4ffa550e    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_block
    ADD CONSTRAINT fk_6b54dcbd4ffa550e FOREIGN KEY (device_type_id) REFERENCES public.mtb_device_type(id);
 G   ALTER TABLE ONLY public.dtb_block DROP CONSTRAINT fk_6b54dcbd4ffa550e;
       public          postgres    false    209    3448    248            "           2606    17400 (   dtb_customer_address fk_6c38c0f89395c3f3    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_customer_address
    ADD CONSTRAINT fk_6c38c0f89395c3f3 FOREIGN KEY (customer_id) REFERENCES public.dtb_customer(id);
 R   ALTER TABLE ONLY public.dtb_customer_address DROP CONSTRAINT fk_6c38c0f89395c3f3;
       public          postgres    false    3397    224    226            $           2606    17410 (   dtb_customer_address fk_6c38c0f8e171ef5f    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_customer_address
    ADD CONSTRAINT fk_6c38c0f8e171ef5f FOREIGN KEY (pref_id) REFERENCES public.mtb_pref(id);
 R   ALTER TABLE ONLY public.dtb_customer_address DROP CONSTRAINT fk_6c38c0f8e171ef5f;
       public          postgres    false    254    3460    226            #           2606    17405 (   dtb_customer_address fk_6c38c0f8f92f3e70    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_customer_address
    ADD CONSTRAINT fk_6c38c0f8f92f3e70 FOREIGN KEY (country_id) REFERENCES public.mtb_country(id);
 R   ALTER TABLE ONLY public.dtb_customer_address DROP CONSTRAINT fk_6c38c0f8f92f3e70;
       public          postgres    false    226    3440    244            `           2606    17765 '   plg_related_product fk_77b090f74584665a    FK CONSTRAINT     �   ALTER TABLE ONLY public.plg_related_product
    ADD CONSTRAINT fk_77b090f74584665a FOREIGN KEY (product_id) REFERENCES public.dtb_product(id);
 Q   ALTER TABLE ONLY public.plg_related_product DROP CONSTRAINT fk_77b090f74584665a;
       public          postgres    false    280    304    3517            a           2606    17770 '   plg_related_product fk_77b090f7a15b9831    FK CONSTRAINT     �   ALTER TABLE ONLY public.plg_related_product
    ADD CONSTRAINT fk_77b090f7a15b9831 FOREIGN KEY (child_product_id) REFERENCES public.dtb_product(id);
 Q   ALTER TABLE ONLY public.plg_related_product DROP CONSTRAINT fk_77b090f7a15b9831;
       public          postgres    false    280    3517    304            ?           2606    17545    dtb_payment fk_7aff628f61220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_payment
    ADD CONSTRAINT fk_7aff628f61220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 I   ALTER TABLE ONLY public.dtb_payment DROP CONSTRAINT fk_7aff628f61220ea6;
       public          postgres    false    3480    275    265                       2606    17380     dtb_customer fk_8298bbe35a2db2a0    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_customer
    ADD CONSTRAINT fk_8298bbe35a2db2a0 FOREIGN KEY (sex_id) REFERENCES public.mtb_sex(id);
 J   ALTER TABLE ONLY public.dtb_customer DROP CONSTRAINT fk_8298bbe35a2db2a0;
       public          postgres    false    224    260    3472                       2606    17385    dtb_customer fk_8298bbe3be04ea9    FK CONSTRAINT        ALTER TABLE ONLY public.dtb_customer
    ADD CONSTRAINT fk_8298bbe3be04ea9 FOREIGN KEY (job_id) REFERENCES public.mtb_job(id);
 I   ALTER TABLE ONLY public.dtb_customer DROP CONSTRAINT fk_8298bbe3be04ea9;
       public          postgres    false    3450    224    249                       2606    17375     dtb_customer fk_8298bbe3c00af8a7    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_customer
    ADD CONSTRAINT fk_8298bbe3c00af8a7 FOREIGN KEY (customer_status_id) REFERENCES public.mtb_customer_status(id);
 J   ALTER TABLE ONLY public.dtb_customer DROP CONSTRAINT fk_8298bbe3c00af8a7;
       public          postgres    false    3446    224    247            !           2606    17395     dtb_customer fk_8298bbe3e171ef5f    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_customer
    ADD CONSTRAINT fk_8298bbe3e171ef5f FOREIGN KEY (pref_id) REFERENCES public.mtb_pref(id);
 J   ALTER TABLE ONLY public.dtb_customer DROP CONSTRAINT fk_8298bbe3e171ef5f;
       public          postgres    false    3460    224    254                        2606    17390     dtb_customer fk_8298bbe3f92f3e70    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_customer
    ADD CONSTRAINT fk_8298bbe3f92f3e70 FOREIGN KEY (country_id) REFERENCES public.mtb_country(id);
 J   ALTER TABLE ONLY public.dtb_customer DROP CONSTRAINT fk_8298bbe3f92f3e70;
       public          postgres    false    3440    224    244            ^           2606    17700     dtb_template fk_94c12a694ffa550e    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_template
    ADD CONSTRAINT fk_94c12a694ffa550e FOREIGN KEY (device_type_id) REFERENCES public.mtb_device_type(id);
 J   ALTER TABLE ONLY public.dtb_template DROP CONSTRAINT fk_94c12a694ffa550e;
       public          postgres    false    248    3448    297                       2606    17355 &   dtb_class_category fk_9b0d1dba61220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_class_category
    ADD CONSTRAINT fk_9b0d1dba61220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 P   ALTER TABLE ONLY public.dtb_class_category DROP CONSTRAINT fk_9b0d1dba61220ea6;
       public          postgres    false    3480    265    218                       2606    17350 &   dtb_class_category fk_9b0d1dbab462fb2a    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_class_category
    ADD CONSTRAINT fk_9b0d1dbab462fb2a FOREIGN KEY (class_name_id) REFERENCES public.dtb_class_name(id);
 P   ALTER TABLE ONLY public.dtb_class_category DROP CONSTRAINT fk_9b0d1dbab462fb2a;
       public          postgres    false    3385    220    218            8           2606    17510 "   dtb_order_item fk_a0c8c3ed1bd5c574    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order_item
    ADD CONSTRAINT fk_a0c8c3ed1bd5c574 FOREIGN KEY (rounding_type_id) REFERENCES public.mtb_rounding_type(id);
 L   ALTER TABLE ONLY public.dtb_order_item DROP CONSTRAINT fk_a0c8c3ed1bd5c574;
       public          postgres    false    269    3468    258            6           2606    17500 "   dtb_order_item fk_a0c8c3ed21b06187    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order_item
    ADD CONSTRAINT fk_a0c8c3ed21b06187 FOREIGN KEY (product_class_id) REFERENCES public.dtb_product_class(id);
 L   ALTER TABLE ONLY public.dtb_order_item DROP CONSTRAINT fk_a0c8c3ed21b06187;
       public          postgres    false    269    283    3525            5           2606    17495 "   dtb_order_item fk_a0c8c3ed4584665a    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order_item
    ADD CONSTRAINT fk_a0c8c3ed4584665a FOREIGN KEY (product_id) REFERENCES public.dtb_product(id);
 L   ALTER TABLE ONLY public.dtb_order_item DROP CONSTRAINT fk_a0c8c3ed4584665a;
       public          postgres    false    269    280    3517            7           2606    17505 "   dtb_order_item fk_a0c8c3ed4887f3f8    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order_item
    ADD CONSTRAINT fk_a0c8c3ed4887f3f8 FOREIGN KEY (shipping_id) REFERENCES public.dtb_shipping(id);
 L   ALTER TABLE ONLY public.dtb_order_item DROP CONSTRAINT fk_a0c8c3ed4887f3f8;
       public          postgres    false    291    3548    269            9           2606    17515 "   dtb_order_item fk_a0c8c3ed84042c99    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order_item
    ADD CONSTRAINT fk_a0c8c3ed84042c99 FOREIGN KEY (tax_type_id) REFERENCES public.mtb_tax_type(id);
 L   ALTER TABLE ONLY public.dtb_order_item DROP CONSTRAINT fk_a0c8c3ed84042c99;
       public          postgres    false    262    269    3476            4           2606    17490 "   dtb_order_item fk_a0c8c3ed8d9f6d38    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order_item
    ADD CONSTRAINT fk_a0c8c3ed8d9f6d38 FOREIGN KEY (order_id) REFERENCES public.dtb_order(id);
 L   ALTER TABLE ONLY public.dtb_order_item DROP CONSTRAINT fk_a0c8c3ed8d9f6d38;
       public          postgres    false    269    203    3337            :           2606    17520 "   dtb_order_item fk_a0c8c3eda2505856    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order_item
    ADD CONSTRAINT fk_a0c8c3eda2505856 FOREIGN KEY (tax_display_type_id) REFERENCES public.mtb_tax_display_type(id);
 L   ALTER TABLE ONLY public.dtb_order_item DROP CONSTRAINT fk_a0c8c3eda2505856;
       public          postgres    false    3474    261    269            ;           2606    17525 "   dtb_order_item fk_a0c8c3edcad13ead    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_order_item
    ADD CONSTRAINT fk_a0c8c3edcad13ead FOREIGN KEY (order_item_type_id) REFERENCES public.mtb_order_item_type(id);
 L   ALTER TABLE ONLY public.dtb_order_item DROP CONSTRAINT fk_a0c8c3edcad13ead;
       public          postgres    false    269    3452    250                       2606    17335 !   dtb_cart_item fk_b0228f741ad5cdbf    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_cart_item
    ADD CONSTRAINT fk_b0228f741ad5cdbf FOREIGN KEY (cart_id) REFERENCES public.dtb_cart(id) ON DELETE CASCADE;
 K   ALTER TABLE ONLY public.dtb_cart_item DROP CONSTRAINT fk_b0228f741ad5cdbf;
       public          postgres    false    3368    212    214                       2606    17330 !   dtb_cart_item fk_b0228f7421b06187    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_cart_item
    ADD CONSTRAINT fk_b0228f7421b06187 FOREIGN KEY (product_class_id) REFERENCES public.dtb_product_class(id);
 K   ALTER TABLE ONLY public.dtb_cart_item DROP CONSTRAINT fk_b0228f7421b06187;
       public          postgres    false    3525    214    283            E           2606    17575 (   dtb_product_category fk_b057789112469de2    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_category
    ADD CONSTRAINT fk_b057789112469de2 FOREIGN KEY (category_id) REFERENCES public.dtb_category(id);
 R   ALTER TABLE ONLY public.dtb_product_category DROP CONSTRAINT fk_b057789112469de2;
       public          postgres    false    281    216    3377            D           2606    17570 (   dtb_product_category fk_b05778914584665a    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_category
    ADD CONSTRAINT fk_b05778914584665a FOREIGN KEY (product_id) REFERENCES public.dtb_product(id);
 R   ALTER TABLE ONLY public.dtb_product_category DROP CONSTRAINT fk_b05778914584665a;
       public          postgres    false    281    280    3517            N           2606    17620 %   dtb_product_stock fk_bc6c9e4521b06187    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_stock
    ADD CONSTRAINT fk_bc6c9e4521b06187 FOREIGN KEY (product_class_id) REFERENCES public.dtb_product_class(id);
 O   ALTER TABLE ONLY public.dtb_product_stock DROP CONSTRAINT fk_bc6c9e4521b06187;
       public          postgres    false    283    287    3525            O           2606    17625 %   dtb_product_stock fk_bc6c9e4561220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product_stock
    ADD CONSTRAINT fk_bc6c9e4561220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 O   ALTER TABLE ONLY public.dtb_product_stock DROP CONSTRAINT fk_bc6c9e4561220ea6;
       public          postgres    false    3480    265    287            C           2606    17565    dtb_product fk_c49de22f557b630    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product
    ADD CONSTRAINT fk_c49de22f557b630 FOREIGN KEY (product_status_id) REFERENCES public.mtb_product_status(id);
 H   ALTER TABLE ONLY public.dtb_product DROP CONSTRAINT fk_c49de22f557b630;
       public          postgres    false    280    257    3466            B           2606    17560    dtb_product fk_c49de22f61220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_product
    ADD CONSTRAINT fk_c49de22f61220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 I   ALTER TABLE ONLY public.dtb_product DROP CONSTRAINT fk_c49de22f61220ea6;
       public          postgres    false    280    265    3480            _           2606    17760 -   plg_ec4_momo_transactions fk_ca3910eb8d9f6d38    FK CONSTRAINT     �   ALTER TABLE ONLY public.plg_ec4_momo_transactions
    ADD CONSTRAINT fk_ca3910eb8d9f6d38 FOREIGN KEY (order_id) REFERENCES public.dtb_order(id);
 W   ALTER TABLE ONLY public.plg_ec4_momo_transactions DROP CONSTRAINT fk_ca3910eb8d9f6d38;
       public          postgres    false    3337    302    203            <           2606    17530    dtb_page fk_e3951a67d0618e8c    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_page
    ADD CONSTRAINT fk_e3951a67d0618e8c FOREIGN KEY (master_page_id) REFERENCES public.dtb_page(id);
 F   ALTER TABLE ONLY public.dtb_page DROP CONSTRAINT fk_e3951a67d0618e8c;
       public          postgres    false    272    3500    272            +           2606    17445 %   dtb_delivery_time fk_e80ee3a612136921    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_delivery_time
    ADD CONSTRAINT fk_e80ee3a612136921 FOREIGN KEY (delivery_id) REFERENCES public.dtb_delivery(id);
 O   ALTER TABLE ONLY public.dtb_delivery_time DROP CONSTRAINT fk_e80ee3a612136921;
       public          postgres    false    236    3415    230            3           2606    17485    dtb_news fk_ea4c351761220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_news
    ADD CONSTRAINT fk_ea4c351761220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 F   ALTER TABLE ONLY public.dtb_news DROP CONSTRAINT fk_ea4c351761220ea6;
       public          postgres    false    267    265    3480            &           2606    17420 1   dtb_customer_favorite_product fk_ed6313834584665a    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_customer_favorite_product
    ADD CONSTRAINT fk_ed6313834584665a FOREIGN KEY (product_id) REFERENCES public.dtb_product(id);
 [   ALTER TABLE ONLY public.dtb_customer_favorite_product DROP CONSTRAINT fk_ed6313834584665a;
       public          postgres    false    3517    280    228            %           2606    17415 1   dtb_customer_favorite_product fk_ed6313839395c3f3    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_customer_favorite_product
    ADD CONSTRAINT fk_ed6313839395c3f3 FOREIGN KEY (customer_id) REFERENCES public.dtb_customer(id);
 [   ALTER TABLE ONLY public.dtb_customer_favorite_product DROP CONSTRAINT fk_ed6313839395c3f3;
       public          postgres    false    224    3397    228            >           2606    17540 #   dtb_page_layout fk_f27999418c22aa1a    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_page_layout
    ADD CONSTRAINT fk_f27999418c22aa1a FOREIGN KEY (layout_id) REFERENCES public.dtb_layout(id);
 M   ALTER TABLE ONLY public.dtb_page_layout DROP CONSTRAINT fk_f27999418c22aa1a;
       public          postgres    false    238    3428    273            =           2606    17535 "   dtb_page_layout fk_f2799941c4663e4    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_page_layout
    ADD CONSTRAINT fk_f2799941c4663e4 FOREIGN KEY (page_id) REFERENCES public.dtb_page(id);
 L   ALTER TABLE ONLY public.dtb_page_layout DROP CONSTRAINT fk_f2799941c4663e4;
       public          postgres    false    273    3500    272                       2606    17370    dtb_csv fk_f55f48c361220ea6    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_csv
    ADD CONSTRAINT fk_f55f48c361220ea6 FOREIGN KEY (creator_id) REFERENCES public.dtb_member(id);
 E   ALTER TABLE ONLY public.dtb_csv DROP CONSTRAINT fk_f55f48c361220ea6;
       public          postgres    false    3480    222    265                       2606    17365    dtb_csv fk_f55f48c3e8507796    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_csv
    ADD CONSTRAINT fk_f55f48c3e8507796 FOREIGN KEY (csv_type_id) REFERENCES public.mtb_csv_type(id);
 E   ALTER TABLE ONLY public.dtb_csv DROP CONSTRAINT fk_f55f48c3e8507796;
       public          postgres    false    222    245    3442                       2606    17325    dtb_cart fk_fc3c24f09395c3f3    FK CONSTRAINT     �   ALTER TABLE ONLY public.dtb_cart
    ADD CONSTRAINT fk_fc3c24f09395c3f3 FOREIGN KEY (customer_id) REFERENCES public.dtb_customer(id);
 F   ALTER TABLE ONLY public.dtb_cart DROP CONSTRAINT fk_fc3c24f09395c3f3;
       public          postgres    false    212    3397    224            @      x������ � �      �      x������ � �      �   �   x�3��É
K�KJ�M�s3s���s)tU�ʯ��od`d�k`�k`�`hjejhel�m`���40�%��!F���>U�~�&�.�.�E��~ޅ�N��)�QQi���@��X���������� �C�      �   p  x����J1�י�8�[���Q�]�Q(�Ka�t�I��(]J@]w����3-�G�ĤRŢ�$��/��O��������q��j4lǭ�ͺ�c;��vc�v�-_�YM�SYLa,d��.%��'�ȦF�n�	�3�o��� >���C�۩~i<�_z6������?lIdlkk[O�O"*�y�%3�Ȅ(������#�4�UU�B�$6����%+�P�/_C1����l\�g�g��[M�6��Q6VE���s�k��	��a(x�E�����?*���f�((���"��	s��%T�\y,%�9��n�2%�9������m!B	�cL�(��(5��J�B�/�EC�����p�oY�'�)~u      �   z   x�m�1� ��18��+��FL��q�6�f s*I�v���˓�\.��,�0��4I$
hQ ;��a�\q�0�f2���sV����bهx�O
ڛC}��h��l�ٲǙ�d�� �      �   �   x����
�0F��)ܥ���?�
�>@)H�4K����>�iq��8���p�{8)s��,lO��=����aS�{�w}q�9��b�@
@�	B:��tB�A/�u�N�	�i��H��lq0IF�`|i�Rm�e+��\{�4���RY��_Ì94�G���"\����EQ�      �   =   x�3�44�4�46�00�30�4���LN,*�,I��2��4�4416�&k
�k�Ko� ���      �   �   x�3��!�ԜĒ|NCNSN#Cs]c]sC+C+S#ms\�ɉ%���E�\FP���Z��P��p��\�܇�ggM5#�Tc�f����7�)�^������pw;��K���4�4&�h�V��ΡN� C�5��o'��2r�Q�~�kg�Bvj.���k�	68��L��Ë*�.4!װ=... o�z�      �   �   x�3�4���t��O��I,I�>�E!�s9�9K8��u�u��M�L���q	'�$'�I�/��2���^�������Rtx�BEb^��FC�K����4���n�2 (L��&@�64��U8<]D�r(S��F3A4*�Ҡ1�X`f�6D�r(�=... 쌏�      �   q   x�3���t�I,�/*VH�/Rpur��8���¼t�����99��u�u��M�L���q	'�$�%�r�άJE2��������c�iD��1z\\\ ��4G      �   D  x���M��������Eဗ���qݴI�b]8G"F$U��f��F�,�(� 3��� )�J(������������������c����9�=��Ĥ_HO=oy�࿞Fi�^��'�x�R0�x�&[M�˿,��]$ϧ��M���TRf=V�Ǌ%3�c��(�P��{��G*,|���r!�?���i��n���N7����D5�h䆾tZ��H�:,�k�לn�՗V'I�8�%�MٛnV�AR2a����`�q4��T���͏rʯ�~�&)��B���:����I�l�S�s�"Ed�-|7�?�I^[���r��g(_�P�I�,|����M|W��7<�=�!i1{2s��������H�ż��AZÉ;�O���%|��/����6�_�WC� �(�<d&Y!�}��$N��vʛ0����e��4�1�m��W�F4�1�uBP���4
2��h��FAc��\���'��@����l�] O7�/��}ķ���S��42��!����c���-�Ꜣ�RŲr��ޅx�I���g��f�h��k�,���h͂0H�q�5���	'շ�<m_�ZPĶ����(��� 99�޽��k�'F,����)����"I�1U�2u����}ln�	�ēTDU,DUu��o*�*��6G�~^ϧ�{Q��<�܈,0�s�>�q,��4t'�t�lȹ��^7��L�:n�`v�s8��U����H$��J�2�#�n$ESQ��FH�A���)u'�UX�%��G�cU6�]^2�htԘ�v�>Yr$�~Ri^/D�<-���>ME(�/�".�:�jX��e���&N���P��p�FW�ڜ��LzE�4!<��;U��wo�|���ګ�8�i6B�y��z�l�U4%Z��U�� q����;'E��n�wgys���j�q^r�!�񼾦X:�>�(�]�q�<��k�*|'J�VA:�V��<Jx�C��tL�Χq�7�ex�����2��r�'�P�����r��eS�n�y�{S�@j.KL*�~�m/�R,�'�67!���1������*H�'�΂$���B��Fz�R�IC�� Y�����h�G�_L67Wr�t�M�g3oޗr��m70��m$wɷ������9v�� ��n���>j7i����0�e40��=ȧm�
Zճ�|c����e`��%>ϮF�=\?�����J``�����e�Ϸ���XfX�M�P�m2�5�|�C���/6����(��{Q�%:�hu8hM4d�
$Z�4j������E:��?*�e�*4'�e���!�س�`ev���4�����	��Y �Zh�i��ٜh%i�%�h�i��z�@|fai�<e���hm�§��'>n�@�����,6�[~n,7���F$�by�������������wo�"i���{�g��/^Fiq8���B^!�[�g����ˏ��/���̌8�� �R��\z�1�un�A������3w�B?J[k[�V:6�4Ο�m" ��=�S�ݥQ�)U��튪�@c�7J��خ��"�l�ƫ��Pg�D�fD��v\<�	��;9�4�J>ܥ��9��v��"#���x�@��4���l��h��O�1΁��Wܐ�VH��?�_5�����S����@d�C�������Ś|�QC#� �Ꞹ�����g���A�3r$�T�1ЁؐV[Ҫ����@�H�~�.?��?�N����+�p |Eh,t �Yx�֎!�D��b��n�Ӷ9H'��xw7JJ���+����F�7{:�.��p�K/g�ߊr

l��v�2��l��'�%�l��X�d��*{�C?.�Qd���k�!��z�v2����~���|t�I��j;���f4ɏk�bD�$�hVz�V�ޟq����`�S�;�޳�v(�:g=u��� ����X����w�85�%�zJ���:5��W�S�;�N�D�7a]�S��R�X�S��VޙԷ	`H�u!osoW��������fĢ�f�;�9�fL�7��>��0�A�#��&�R1�l��x�^�?uGD$��!g;��x܌��N������W���Q�Iĩ��i{=���f$Dʪ��#�!Dʪʦ��]���+�Ǐ���_�,�DȪ�ƪq_��,"KUK�C��ƍ��d�{�ĊGd�mW��8SH��)��LLc���.��(�AmL3 �c��fB��}8������C`X���hw�]*�T��x����:�%��`}ӓ�t�ؔ�t��aK��UR�4�7�� ��4'0DА���ʞ�t�?�	�0�;� ��'0��O������o�M���BhXw3@ߞ��I��T�7(0n���	� )ֶ$�[R�=��99oL`&ȷgB����3!�ՙ�L�pG�&0�_�7a@W3!"ז�L�G�%0���	̄�w<g3!~(k3!�}(o� hN�P�ޜ`��ws���������,ގjN�zws���sٌ`���Ì@6�=E�5L���␕X�vOc��8�m�Tt����4�	���2�7$�Cli잚?�B#b�cc p�HuQ>u)�T��`c؀31Tá:l>:VR�vO����j<�&��i��΅j�����Z8�<D�:�Bօ��`��_����`���]�FAD��An�o�*O��Ca��YpP��<��G�,8�dt��>�m���>ɍ�)����\�IZ:�ވ^�y*>���<����O���P�h�')�� V}�&�sڽ,�7�hcP!=�/�Yɓב�D���DË�=z�?>ͩ�      �     x�}P�J�@=o�b��0;���植b�ҢP<H/�ɦ)�����Uo������/)�#��A���Ǜ�x���k�4�a�������9��e��^�ɺY�x�}�x]n_%_�����6�<)��|4_��l�/��O��~2b�M�:�Uv~fˊ�!A�Q���Ց�UXS�HNZ�Ry�u���$A�@F���%{t�L�A���plH4��\���i���.���.�AZ2�P$"F ����m����b�1�4��^V~���0��d�      �      x������ � �      �      x������ � �      �   k   x�3���4�N�-�IUpI��,K-����Օp����+X�X�i��N��e�i���9?� 1�����%F@1����������9�%1z\\\ ��5      �   �   x�m�=�@�z8ŔZ`�]~���6D����b�-h��Xx c�X��{�@A�d�ɗ�&C`-_<A�ȦGOg�).��,B��ܢ@l: �� ���5��oˑ�(Uw�xK45��C:��ה~/�XR�)��r�o��D���K��O�����l��D���Tצ8���I�xP���u�N����M`iFn�e� ���          @  x�u�;n1D�xf1�}��^zp�@�woV��e�ݣ�֬G<�c<~����~}��|����=�>�5�~�{�}�{�}���y�ƹ_p׹/����pOw�`(�\,H��,h��,��-��\-�^�t/w����������[C�ry@�ry@�ry@�ry@�vy@�vy@�vy@�vyB�vyB�vyB��s(�.O(�.O(�.O(�pzB����5�����z��k���_�  ��&( аA��lPd �E�A��l�d 4�M�A�����Ma�&��A�Aؠ� l0� l0� l0� l0��q���c����%ϒ��Y
�>K�2�2q��r�βp�gٸ�Gԡ��� C�%d
���!֐9�2�XD&��(b�E�v	v	�ě��~@�%��v	v	���]�]�.�.a�`��K�K�%�%��v�7o���K�%�%��vIvI�$��]�]�.�.e�b��K�K٥إ�Ro�)�G�]�.�.e�b��K�K٥إ�R��vivi�4��]�]�.�.m�~�?���vivi�4��]�]�.�.�.�]�]&�L�Lv�v������|�S5X         ^   x�3�4�>�0/H�p����+X�X�i����b@CC+#+Cs�pJjNfYjQeIfn*�� �̇�K9�(3*F��� ��$�         b   x�3�44��H�U():�����ɜF��ƺ�
�V�&V�F�渄s+�KK�A�8=�=h��@"1/]!9�����g�ͼ�yK�3/F��� �?M         4  x��Y[o��~���Y-Z$�)��7������k�H��E�����fr$Y}�$AP4HPZX�X�v�M��T Z�0��9gH�o�e� c@�Ϝ9�~c�e�
�k#chƖfl��fnf��_[k�M^�?����CI�yQ&���&�>��}?a�����t}-_%��/��,�4�=��x� g�s�p7l>��j�8S����ϭ��s�$l�߷?k�q�_��
�������������+-¬��n�������~����T=��Nж�����Q�)c\��L� ð�wP;[���;ƿ}�ц��m`Y��K$,���,�>G�|�G�J(����G��2�}L���P�g���
�.k	�[��0*��ms�.���F�����VD'�/� ^`qG3L��<��uxYg`�{�Lr.����@IJ�}>h����Fօ��i���0@Mw�מ˻U0	����/���x�}�ֈ_�T2�n�N�۟�͎�E�A(�5p�����V��D�"\��Z���P䨌(���r�U.Z����O��,h�>N8��<��2T��Ga�/�0l} ��� ��GL�R.M�~�?�Z9bX��,țVe��O�wrG����0Q`��L��2��3�����	-[��mY��z��ݴ-ʋW���|~^��'_�
e��g��|.I��Yu�ҿ�)�=�U�(W<J��j�o�q���1H�*�f��:�E2�
kׄ5oE@��G�	�ш�F���6U0tS��k�H�j���E�V�H����XD�4���mܰe�T�޸�ìOd���2}�dp����軶w���\�'��+�9y㥻�͑�������a�����%�i�R��&����뷏S$�JY��z�^O�7��/���td��{B4�H'uP�{��Y�����I��Ύ~�4H�E�4H�dO����1�/E<z*˖_b|?])*}������]�J�T�lxt?�k09k�Ɲ��R�{}'���.�*��0^��vzݹ����N?���M�3���T�����̚��]�N�����Vٯ��~V#��J��M��~�`�"�OO����my.���N��DC��Tp��Ze�5�w�W����:��3�['�9�P���*B�'�aT�v�7�76T�U�:���!��S�Ue�t�`O9Q��FPR��{%_T�C�U�P�<W�i����D�p���P)��w��|���HǧQϦ��Z�b?�Xv�?F�"�ZL����V��5*�o���O�d�I?~�zΐcH-�C�L��k -6rD����U	h�����t�A��`��~�G{�]&��&F�gFS�Ӱ�D0Sc\���9��g��]YV�A�-��a)�Xfe#�Y��@L�aG�0��MH��"00�e���ĕC�����jcu�����X(b�%�]����&Ӣ��f�$�"�,�E������S����ӝ���θ���z�zOl�QG=�F�A��d�o�$�$!q�����'P�QŪrc��.ng�h"|p�R,�:$�o2,�`����6�֦�"K2�T~�q<��RQf��_Q	4ǧVB�㱤��G>��[2'8,���:sT��8W�ZM�O�ʒ���=[�*���ǖ˖�+��f�W+�X�pI�b�s-�6	H�`�gl&Xy&�6���џv����b���sW��L��W�sˬ6�:mE9����î"K�"��d���	YN�ؓFd �jNW�m�+��Z�-z��s�U�ig���[3/@�|�>������+���aY{�t����~	C|��w�a|w�ŅGG&���?�KN���
'��]M������K�S>�d	X�`
[����o`[�Ht�3=������q�b��`� �}�� �>h���ԪH���	��� ",I���U���Ua�j�07{�ۮ'\U���7W(T�����JA'l>�c@����ԟ�z:6߃���zU��]Hzk��Mcw�+���Lz�7M�[T*��/�q7�!�8����4�Qg��2e�onLߣQ�t�5et'����BtU����0�\H�7��׮]���         �  x���=O�@���l��kua��88��R��zG������(!�`Bt01i�t���o�]�Bysi\:4��w}���4J������z*���� ��V�&�Ƹ@�t�l�m�&���B� ���Q��v�gJQӍ�V�iе�^�V��q�#vb��MբT�V��=������3ޘ a�ײ(�b׉mw|j��f�"Ƙ��,���B|)�J��:p�d0�ը$�����so�db�FCF�&���kNZ2�c�ڊKdPU��JVI��������hK���K����V*�Atw0Ӿ(��#\�o�5u�k�4�dD���C����~D���p�f�R��	Sr1ןa0�DgMO^��	g�^J�-�_b��|J��M���"<`b�e��%�Q�5Z��RV��k�UU��!��         �   x�}�IKQ��o>�ܥ�eޒ���"�KQJ��V:�E�R����E�$�I~	)�Fj��2��Z<�^,�N�`	�1�<K��]'hYK�d�����j��I�0��DD��  ��� � =۞����y��!��WWi=l��a�+��m���l��P~,(Ҡ-h���SgS�:@4%����C4Υ�)Ă�KJZ=M����{�Z,?of�帚�y5�7���N�Ԃ�Q���#��A�ȿg�]6M���c\      !   �   x�uP�N�0���8fHeP�k�>A�`P\�� �)�ܡCGTUJ@10�#!��}�{��3ѡ��{�)1��TשT��%�bp�?����������L�ބ�v�9CS�m���:|�44���e_�1%�_h"G�-�r-��08�m���f3�?Y���̙#��`����9�m�*r/1�����Y�.�3g������+ci�������,B��N/.`�Y*�S�lp���d�K�d���      �   �  x��ҽn�0 ��z
��ǣ(���:@�$�`d�B��e���~k)���е�ؠ(��@ь~�@@�����5j�T8�ԁw| 'H�K	a@TnM�Q�֧�C��T:.�L%�q"�ڻDJ�s�='�⼮N���qn�;�͵|9���ؖcZ2��iA$4yՋi:��l�yLg��㤠G���{�syqF{��+�M
�������wz�a.7]V�;?�4;g핛C��QWM�������W�ޅV� 7�S�2T�� �Bz-���ݞP5c�"���mn��������r4Vk����̹ȍQ�c����p�p?����Y]}	�ŷ�g��pN2���,o�[��3��l�$O��^9ǁ{�M�T�T9
���`]�4�������_����\~���bD�#S�0s�,2`�MZ>��@g�� ����1�      #     x�͓An� E��)�@"��Z��fY��JF%�j�$�m���X�M��E��d�H0o���	KĦw6�V�F:��w[�|tF)�S�7��D?�lVɳR�Wbx2����5���g�ԵC!Vp0'�vP �]��w���*�"W@�I6�5ZZM�}؟d�����m�Yj��/\#�p�Ŷ���Fi���,5 �I��f�}��O����
9��5�gn�?��$����>�����d���e��'���dw��1v?-Y�<M�/"�g�      $      x������ � �      &   �  x����k�F���_1Ǆ�Z����5m7�ݥ���a�(��b�y��ǥ�e)��C�BY�mh�����O�4#�~�Vg �z#���7�}ߓM��s�%��n��o��xJ�y�n��g�Vw�l�]d�V�`����Z��8C�%��8t��^2ox������ΰ5���C=4�/]�&�E��D��6���?"cn|#��0t�n�w�A�$�'��� s�������#�_t�1�څ;�����D�����#�M�����^�g�B�p�o�I�װ��!8�T�� #[fi��b38������+�۩��]�#�k�Ų6��f��Cw7b׮�Ӟ:S�S���,��i2����E��Ai4�9����YN����f�۟o��Ӧ�� ��!�f�$}@v3�30��9�9�� t�s0e�c��m2�Gi����Q�wN؄Gpے�:��j?4+j2��BU.>�-�yOH2�)�i�	�q��j	{J��X�1\F��3��X�#�V]��y.�#<>�e�^z��Y���)Y�*�jܬmV� �D�0���'��q	P�Z�hݳm��!�V�ː8L���0�A	d�&���� �@D]*K�]������>K{Jk��d��, SGG�Zp�4=�ۇPn�+��"ߖe�=��c���E��R+�
��ձ��I�XT�(�zd�/��	�C>�6.&�Hܙ̗��2��+)�j�����?����Z�����M����Ce���	�bI�]O�c/�������ݚY���SW./�4�k���s���9�n�a��C=�m�'U�m��U��Y�2�r}Վ���mmA1`���8YX橬��cx��A�EKs�(���,Jy���r"���0�8��_�F��D��0L�S7�����λ�;G�P�W��rIw2�B(3�{dr���C�\HXuч$�4�c�'�M���{�RMe��o:ܾ�����F�a��=8ϕ������(}]��.W�FE��A4vê�)�¹����*s�D�3]!z�ʰe/40ȑ).^�����wo���)���I��|�Β����/�m5��i�T�괽�|�KY;Fo�ߛ���b\֗5e��j}�D����2MU1���0KOI�gY��/��/v���E�|��W���f"0W����3rY�<K�6�W�omm�KPG�      '   �   x�e�;1��>ZO��	"A� n�ۑK$����<�R��u������4��9��a�ù�mk��L��~��s�1'�n�yz��@l&�cNF5���y۝`�A�>L��Ԁ>L��������Ā^c"���7�k ���#���zy9��M��.��A?��{��������$�iB~N®�r9�Z�ي      )     x����K�0�s�W�������:����KlC���v��e�уW��a�"����w,i�V�C��}���0�园\���n����X# ~�*��j2[��p~)拙��۹4�ke�ұ��\*K8gf%��&��.��"�"`G0�����xѼ��^�l�Ҡl��՗-7np�Ib.]�E���
�_�g��o��;�f�?"��#^)aTXd�'N�S-�PmM��p���8^^��E�_'nT-�~���E�E��w��0�=����      *   *   x�3�4�,H��M�+�/(����2�4�1�1B����� �      ,   �   x�3�|9m�ˆ�O��=����y��敏�6<nZ�y3gPjNbIjJ@Q~Jir�	g	�����!��ed`d�k`�k`�`h`e`fel�m`�&B� ႜ���<.NWg]�P'W�����Լ���܂�T� �<'��Zb�g�g��:c��Ƙ��X� Y���� �]CE      .   �  x��R�k�0='�w1���6�u�B!�n��r��c9s�t>�����C)�at���%;�:점�C��>�N��z�?�$����m�[nk�������2�X�M���5�b8�2�P ��J��5�d�����ȡ�"t`}�>Gpb�G�%P|�>��Q_����@l쑍"4�-����K���g<dE�p}c�WG�\ r��X������Y�^r��k�M�nH#��U\��Z@�甁d��6�(K���)�򁯉/8��~��JY��$Ʊ�&�y��2$�5�&R��;���v�%=w���{B��GidT���Y�|sb�c�4��h@��~E>�l�L�۬R��ZK3
�)oG��Y�!C�9�\�<7�]ؾ���K�&�Q�*Q���HP��'6w����p�Ǜ+R%��NG��#��k��ܨե@�����z0������0���^�H�v7<���.����uIM�OxC{���??�R      /   E   x�3�4�,(�O)M.IN,IM�/��2�4�"f�E�C��^#NS,bfb�X�cq�1�cqK� ܯLI      1     x���MK�0�s�+�.]f&�������I��v�$*���MB�M� B���)��y[t��p]���y�P��	�`�vw��2��@L�v�e��*��?��>>�ϗe[^O�:��� �e�e����H�j���d[��"��.E�Iɹ$UE���@�s�3)�����*]�n�����WF��Xfפ~�����:g�]�\%���*g��~1�UοN�.�g�9���9q}����o���b(?nz�~'*���v���F)Y�k�[P�F��q� U�6>      3   �   x���K�0����*���s����p$�@%D��!q��s�21�j�&I.ǡ�ovZ���&Xu������s�>	�qjqj����w9C��w�C�veG*�+;�h�4��j�-�XE��I�l����
�`4���R�r�f�      5   �   x���1�0����Qѷ�4��	������	������<}�O���N�QJ�{�Nh�,�e/�ޖ�c^��2_�B�H�����G2���H��GF?R1�!��V7�ʢT��vѱZ�En���S�wu��孈�fc�R�c�	�B�      7      x������ � �      9   �   x�3�4��`*��ӥ��q����]0�17)����������Ҕ�� 8���B�J��J/�U(�8� /C� ���
wOVp�8�V�73/��=_!,�@G!$@��ٗ381� 'U�9?� 1�d+&2202�50�50V04�22�24�60G6"�0PCqFfAAf^:���?Ft��KjNfYjq2�20��!�0���9�YXX`񏅕�%�b���� �m��      ;   \   x�3�~�kq�BA��]+sr�i�Y���e���p��D�䌇�{���^�ޕ��PrxK&�X�1�	� #���y��`1z\\\ �,�      =   :   x�3��CA�����F�����
�V�&V�F��$
�$V��r��qqq Gf/      ?   c   x�3�44�LIMK,�)�t��F��ƺ�
�V�&V�F�渄KRsrKR��@f�f�Wr�*xI##�b]#CS+3+SK�1X�����qqq ��#      	   H   x�3�,}�kq�B��
w�+� ɉy����%�E�%�\���@��
�w�MT�8� (o�$���� ��      
     x�uY�r7}��b�6v�&���GQ�d[kMF���$a�p�`f�P�������s�ʾ$T��O���Y�>.M�땊��uu��o����&�5Vg/�/���k5>�Su�u�ѵmZ�ӓ�LG�ڶf�Zݚ&r_����v�U6L�0m=X��u���]����\>����:���XQ��-μ^D[�e'U�'�Z�{�&�+0���[[k�N�l<�@��q@���� F0��� E���Y��lU�>@��bvbO�0N��t�����n��뉬�r��:8]����`on�I�.�u���e��޶��D��������{��O����n#������kS��b������ހ�8/F���dK�VG�ŷv}1�nQ��C�T2`4ΰ�\%9�1��M#�����*�D/����&�������Q�赭��;L~Y��>��Y�~�nn��	��b�iܘ0�b^�w�SD`�E�:	�1�v�h7���N��m.p7��<8��
.*�E���ZH�kZ�+YipI찦#
�R}�r��t�iLў��[�n� �zgڍ��c��R]����q���EƯ�J���Ug|ݘ�J鞱�U��>�'���/�q����r|��[�U:����w,tkk��][�m�>��h��sl�0��<WWp�VYBSG�
~rb'�&o�9#�ܘ�p�YF��;��:�ո�ZcDR �8��"�����6��TF�7�����Є��Ṝ�/�����G;����)��?Wޘ�Q9�=����.tkUN��u����K���X �]u���'��4�L�6!�F�*/h�T]w�ڶ*'�QΝ{j	?R]�Qt���|��[���ޞ2� �ݰ*86�Ɓ4Q��G�l"��@�;�3g�D�yv:z1@���צ��B%�ښh���'g�QEA>a=�t�7�D����1��ݰ�W�3\Y�E*uAQS�n[�*,a�]Յh/c�����ܡ�����7[�D��� ���ۙ�V6T{ٌ	u�f�k7��B	�ez�>����qI�iQ��8��0w[ֺ��^ZDeI��ɗ�n�|c��l�@�{�*�MR�{�� m��꿺���������p5��R��ɢvj�J��J�����j�6�Ӽ;�8x��*�Q�S��r�u&��эA�Ub8d��ovt���E��+�@�O����x!�	Gp�>魖P���1�� B9p��Ͻ�;���#��Y�2`B�?��o����ϷT��x4 ]�x~�ۅ^<@ �ٳm_�0��N�lV"�FfT�"O�b���ICd�U��O�b��t��(�50{�;�5�5�W�X@-� ��,�mt��GѺ��rO�QD�hBY��-���v��_l(��9Bsf�K�{��RND���w��*:���U3�nfj���)ٱ�p��rnr�k۶�Ի3OV���f= m!�O|�2Nќ���O��To�ʍi\�qд�J���)��dG�>k�Xc�������4Jj�_H��G����O���A��,�ᘫ@�C��I�H�y����9�j�L�E9�ot�J Y�Wn<�&��B>:p�����5��>KL�p/��\���|/��s]�Z*R������J�Aw��r"�D�s�X&:��7�'f�I��H�{�v���yU`�7ȕP�CH�@��;����K�;T��v�>���L�����$���쁜�`&�����?���?J���P{ؙ%��C��I� s���]0K�Z����ߡ�m ��8%:1���*��ڮtO[s��rj
��t�} P�P�RȠ�=8;G��$2
����r/Cf����Wj20�����"��Q�.-��9U
�ŝ�pK�d��;@�5Z=�PC���Q15c8�I��Mj
Đ�`��3����SO��;�\��*�1w�)��ݧeƮ��NX���� ��WW=���d��Ѻ���������c��j5�@u�7>"n��(r�bj2P��>��cD���B�ܶ"�^�z6|AxA�ܣ?��S	��<�u�@}C*4g��6�B< ����z��H>&�$��Y��M
�`�Dn23��z�*��M�BF^{в�@�.$EX�"O1ucx��CNH>Rˀ`�jy�Y��I�B.eWC��-;��\!��m������ф���H�K��Y0. �fw��FR� u����ULMnp����S� W��{2�)T�=������N�B�@�x��ޙ!6_5%F��Ƀ�'��[]=���w�9/5�"s`%ؗ^C)�L!C"!$�1���w�wվ��I�'��8!�Xa	9≦��kh	��}:���l8�) 
J��v�`Fj~"nu�������wM���b&-\0���3�N���`M[��\��-(^NI�� ]��&FJ����h�*��=�!�"��'�1��Rv��.�D~���
@B�4��k�ma&����{�,��k��?~0�Ŭ��J^)w�h�g씀��Ӌ�(��?C���E�km���[�|4^�NIЃp��9�����F�����D���(�Q��o;��	I�18�
(�H�V	I�1jFV�ײX��6]U��Kl�����p	?�cWX��5����x�����n����p�	�)R�V��Z7���P��r-�@B�A�ɉ+�la�W�\�Y�ׇ�dՄB�C
+��"` [%$�Sd�l�������h�[y�&����.�ʿH�?��ڥ?�]�n?��^вlW	�x���Fh+����쵨I�	9�k�0jB�=-�N� i�$Wy	�=!ɞ!�n݋<g�H��`�[�B؆ޟA
�re�$�I��Y�Z�!�;;�z&�96+t�ϭ<�e:�װVoR	����V�N/�pQ��F>Z�#�H}r>@M�<E��h'�����<n�;n(��)���C���v��x��=�yc{XI����Ƣq�7Й��4{:��A9'��s����2�A�<�����l�����9X��s��'��SD�Y�����:6�@�R�N��}A�	�����C��s���ӛ7o�s)          i   x�3�~�kq�BA��]+s���8�9���J*R��8�3/L�P�8� /,i�4�<2���<$9C��	�{fb>V)SN�ļ�܇��&+�e���� F��� �z5�         �   x�3�<2��b�������)�xla�B��y��ɥ�%���E�E)�E�%�%��\��w/�DQn�U�	N㍱�7��O�L�GQm�U�NӍ��7ǩ��z�z���c2���P�)Vm�kJ��Z���p��L�̱j����� ���         M   x�3�y�ka�BI���s398�K�K�sS��KKJ���8�3��� +X��i�����ȄË���+9��ec���� "$'�         9   x�3�t�T82���y��)�e�ɩ%��\����V*�^���i�,���� ��{         �  x�M�?KA��O1���8��VmD	���&�p{
��\��ba�J�Dc� (�x�X��=��8;b�o3o~�`վ���S�Z�{�?���&�������+�]9�@��aÙ���W�&j㟺��4A�W��&��>�%�E+h�ւo~?AS�6l�\�R����,�4'�L��=e4�y�G�xב�����~�F�@��������>kL�������<1s�B����Z��N���lr��\��j��i��֌�9l�Pb��B�@	5`�m�x0�k���8s�KtN�p,��r����3���񿋁?jB�7s�����SNFgΜ�YI�<��
�P�L-���vUQ ��w�Y�K��ͬ|�kI�#̀B�i(��[���x-�         �   x�3�~�kq�BA��]+s98�RR�2KRsK*R��82�UH�L�W�8� /��M�1DEIFb^�BI��y�FhJL8�3����9���M֔3$�����&hf�G&d>�ݜ4�؆���m7ES���� �OL�         �   x�3�,��}�{v&�g~QJjQqIbIi1�1g�	�+d<ܽ���E���Ȅļt�����*���i����;=31_!����tNf`#�*J2�2J�/��4DQb6d�35p5�����(r�0G�=ܵX!�ᮅ���(Jb���� ��b�         f   x�e�1� ��s����B��[��3!A�����L��� �rƈڎ�����w�Wmƃ��3gx�Z�ٺ�1�\��Xc�h5
h��SǠ1�[ѸƘZH         Q   x�=�+�@CQݷ��{�� ($˧�&�ܪ&"ĳ��^odB���ݕ��n�Tw'��!�=	�N�i�rl���)B         �  x�E��jA�룧�H����2Q �C �"��2�-\�.B��*���"؉���HE�U��&��{Vn:wv�~��Q����iy���<���ɫ��Qy����S�H��Z[��簍��(WO�D�(�e��j�>Q���|���o�W��3~5b��Z-s����LM��@�\9�Mw��7W��+ȟF��ȷ<UO�wۥ�������Z�A�P[V⴨V�94)�cas.\�%�j����%4�t�a��"ͤ�%4u�d�����>�5I2h��A�|�&��6�H�`�gt-śkiǴS��U��l�lHf,�i�3�3.��3�2���^CÐ�Dm�d�/ʛ�d��qZ.ŜQ�3�!��c,sk�a�g/ěBHg�B/X�Y�IyyT�1č��`22W�f������l�a����d���x���%��0�����^K.�C�=�Ĳ�Fmb�ekW�W��Ds�F�sDs���+i��ۑ͙]!Lڑ��{y^^ep��s��p)�����E8(�Dݼ����`��������<�dt�2�m���Ky:/N�'��RH�`�J�I��I_��Hz�OZog��mOX��H$CG�}k<��L����G8C� ��������������eOV?��N�7j~�	u[}Z��Y#-��}&�*Dč�aj��������cD�|�����B3�F         <   x�32�42P�}�{i2�gAQ~JirINfqInb���	L�]�̀�&i�.���� ���         b   x�3�t�<�P�$�ᮥ
G&>ܵ?O!91�Ӏ��(?�4�$'��$�(%�(��ˈ�����t�܇�gg*�4�paSi1h�B	X1�NCl�c���� �&8K         =   x�3���|��=�Ӏ��(?�4���$����ˈ��y��h�Ɯ~��6�s�I��qqq ��#         M   x�3��I<ې�PR��!�Ӏ�(�4/%3/��� �ˈ������My
9�W�q�*0FVPQ�p�ļtN#T51z\\\ R�'�         +   x�3����ka��#�gqbNjIeA*�Lԉ�!���� �+         #   x�3��K��4�,N��2��{�{=�!����� ��         E   x�3�t�8�!Q!)1_!���ɹ
%�w���4�,I�H�,.�I�,�,H�2�<2��b,*�U��qqq ��#�         D   x�3�t�x���T�$������%�%��\F�����+$�(0�+0���|��5&c������ ��#�         9   x�3���8�%/]!#�ᮅ%
G&>�=3/�Ӏ�<�(�ː�����D��!D<F���  %      B      x������ � �      D      x������ � �      F      x�3�4�4���22A�=... *Ks      H   ;   x�3��())(���/H��M�+�K�H�-�I�O���L,���LS�����E)\1z\\\ �^      I   W   x�3�|6gճ������4�2�|����Ʀg�v��4�2��=]��dW��	L`��gS�ss���r愧폛z8M�b���� �+�      J   K   x�3�|ܼ�q��M{7o�4�2
�����i�����͏��sr�s>n���yP��%���@؜F\1z\\\ u�$�      K   b   x�3�|6gճ������4�2�:�v�|ְ�qs��& ���i=HҐ˘���uOoz���ӈ˄���P�1�)�㦵��?n���i���՜&\1z\\\ �1�     