--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: access_log; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE access_log (
    id bigint NOT NULL,
    terminal_type character varying(45),
    access_type character varying(45),
    status_message character varying(45),
    result integer,
    "timestamp" timestamp without time zone,
    user_id bigint NOT NULL
);


ALTER TABLE public.access_log OWNER TO postgres;

--
-- Name: access_log_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE access_log_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.access_log_id_seq OWNER TO postgres;

--
-- Name: access_log_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE access_log_id_seq OWNED BY access_log.id;


--
-- Name: access_log_user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE access_log_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.access_log_user_id_seq OWNER TO postgres;

--
-- Name: access_log_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE access_log_user_id_seq OWNED BY access_log.user_id;


--
-- Name: bills; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE bills (
    id bigint NOT NULL,
    amount double precision,
    invoice_no character varying(45),
    date_produced date,
    due_date date,
    payment_time timestamp without time zone,
    payment_methods_id integer NOT NULL,
    user_id bigint NOT NULL
);


ALTER TABLE public.bills OWNER TO postgres;

--
-- Name: bills_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE bills_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bills_id_seq OWNER TO postgres;

--
-- Name: bills_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE bills_id_seq OWNED BY bills.id;


--
-- Name: bills_payment_methods_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE bills_payment_methods_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bills_payment_methods_id_seq OWNER TO postgres;

--
-- Name: bills_payment_methods_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE bills_payment_methods_id_seq OWNED BY bills.payment_methods_id;


--
-- Name: bills_user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE bills_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bills_user_id_seq OWNER TO postgres;

--
-- Name: bills_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE bills_user_id_seq OWNED BY bills.user_id;


--
-- Name: operation; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE operation (
    id integer NOT NULL,
    name character varying(255) NOT NULL
);


ALTER TABLE public.operation OWNER TO postgres;

--
-- Name: operation_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE operation_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.operation_id_seq OWNER TO postgres;

--
-- Name: operation_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE operation_id_seq OWNED BY operation.id;


--
-- Name: payment_log; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE payment_log (
    id bigint NOT NULL,
    ref_no character varying(20),
    tranx_id character varying(20),
    response_code character varying(5),
    rc character varying(5),
    amount double precision,
    "timestamp" timestamp without time zone,
    bills_id bigint NOT NULL
);


ALTER TABLE public.payment_log OWNER TO postgres;

--
-- Name: payment_log_bills_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE payment_log_bills_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.payment_log_bills_id_seq OWNER TO postgres;

--
-- Name: payment_log_bills_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE payment_log_bills_id_seq OWNED BY payment_log.bills_id;


--
-- Name: payment_log_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE payment_log_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.payment_log_id_seq OWNER TO postgres;

--
-- Name: payment_log_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE payment_log_id_seq OWNED BY payment_log.id;


--
-- Name: payment_methods; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE payment_methods (
    id integer NOT NULL,
    payment_name character varying(45)
);


ALTER TABLE public.payment_methods OWNER TO postgres;

--
-- Name: payment_methods_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE payment_methods_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.payment_methods_id_seq OWNER TO postgres;

--
-- Name: payment_methods_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE payment_methods_id_seq OWNED BY payment_methods.id;


--
-- Name: product_description; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE product_description (
    product_id integer NOT NULL,
    title character varying(255) NOT NULL,
    description text,
    director character varying(255),
    actors text,
    genre character varying(255),
    writer character varying(255),
    author character varying(255),
    slug character varying(255),
    created timestamp without time zone,
    updated timestamp without time zone
);


ALTER TABLE public.product_description OWNER TO postgres;

--
-- Name: product_description_product_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE product_description_product_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.product_description_product_id_seq OWNER TO postgres;

--
-- Name: product_description_product_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE product_description_product_id_seq OWNED BY product_description.product_id;


--
-- Name: products; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE products (
    id integer NOT NULL,
    name character varying(255),
    zte_product_code character varying(45),
    price double precision,
    parent_id integer,
    type_product integer DEFAULT 1 NOT NULL,
    image character varying(255),
    description text,
    duration integer DEFAULT 30 NOT NULL
);


ALTER TABLE public.products OWNER TO postgres;

--
-- Name: products_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE products_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.products_id_seq OWNER TO postgres;

--
-- Name: products_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE products_id_seq OWNED BY products.id;


--
-- Name: products_parent_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE products_parent_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.products_parent_id_seq OWNER TO postgres;

--
-- Name: products_parent_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE products_parent_id_seq OWNED BY products.parent_id;


--
-- Name: products_type_product_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE products_type_product_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.products_type_product_id_seq OWNER TO postgres;

--
-- Name: products_type_product_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE products_type_product_id_seq OWNED BY products.type_product;


--
-- Name: role; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE role (
    id integer NOT NULL,
    name character varying(45)
);


ALTER TABLE public.role OWNER TO postgres;

--
-- Name: role_access; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE role_access (
    role_id integer NOT NULL,
    operation_id integer NOT NULL
);


ALTER TABLE public.role_access OWNER TO postgres;

--
-- Name: role_access_operation_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE role_access_operation_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.role_access_operation_id_seq OWNER TO postgres;

--
-- Name: role_access_operation_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE role_access_operation_id_seq OWNED BY role_access.operation_id;


--
-- Name: role_access_role_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE role_access_role_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.role_access_role_id_seq OWNER TO postgres;

--
-- Name: role_access_role_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE role_access_role_id_seq OWNED BY role_access.role_id;


--
-- Name: role_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE role_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.role_id_seq OWNER TO postgres;

--
-- Name: role_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE role_id_seq OWNED BY role.id;


--
-- Name: user; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "user" (
    id bigint NOT NULL,
    username character varying(255),
    password character varying(255),
    email character varying(255),
    birthdate date,
    surename character varying(45),
    lastname character varying(45),
    status character varying(45),
    role_id integer,
    address text,
    province character varying(255),
    city character varying(255),
    country character varying(255),
    activkey character varying,
    balance double precision DEFAULT 0 NOT NULL
);


ALTER TABLE public."user" OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_id_seq OWNER TO postgres;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_id_seq OWNED BY "user".id;


--
-- Name: user_products; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE user_products (
    user_id bigint NOT NULL,
    product_id integer NOT NULL,
    bought timestamp without time zone NOT NULL,
    start_date timestamp without time zone,
    end_date timestamp without time zone,
    autodebet boolean DEFAULT false NOT NULL
);


ALTER TABLE public.user_products OWNER TO postgres;

--
-- Name: user_products_product_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_products_product_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_products_product_id_seq OWNER TO postgres;

--
-- Name: user_products_product_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_products_product_id_seq OWNED BY user_products.product_id;


--
-- Name: user_products_user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_products_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_products_user_id_seq OWNER TO postgres;

--
-- Name: user_products_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_products_user_id_seq OWNED BY user_products.user_id;


--
-- Name: user_role_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_role_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_role_id_seq OWNER TO postgres;

--
-- Name: user_role_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_role_id_seq OWNED BY "user".role_id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY access_log ALTER COLUMN id SET DEFAULT nextval('access_log_id_seq'::regclass);


--
-- Name: user_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY access_log ALTER COLUMN user_id SET DEFAULT nextval('access_log_user_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bills ALTER COLUMN id SET DEFAULT nextval('bills_id_seq'::regclass);


--
-- Name: payment_methods_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bills ALTER COLUMN payment_methods_id SET DEFAULT nextval('bills_payment_methods_id_seq'::regclass);


--
-- Name: user_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bills ALTER COLUMN user_id SET DEFAULT nextval('bills_user_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY operation ALTER COLUMN id SET DEFAULT nextval('operation_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY payment_log ALTER COLUMN id SET DEFAULT nextval('payment_log_id_seq'::regclass);


--
-- Name: bills_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY payment_log ALTER COLUMN bills_id SET DEFAULT nextval('payment_log_bills_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY payment_methods ALTER COLUMN id SET DEFAULT nextval('payment_methods_id_seq'::regclass);


--
-- Name: product_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product_description ALTER COLUMN product_id SET DEFAULT nextval('product_description_product_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY products ALTER COLUMN id SET DEFAULT nextval('products_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY role ALTER COLUMN id SET DEFAULT nextval('role_id_seq'::regclass);


--
-- Name: role_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY role_access ALTER COLUMN role_id SET DEFAULT nextval('role_access_role_id_seq'::regclass);


--
-- Name: operation_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY role_access ALTER COLUMN operation_id SET DEFAULT nextval('role_access_operation_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user" ALTER COLUMN id SET DEFAULT nextval('user_id_seq'::regclass);


--
-- Name: role_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user" ALTER COLUMN role_id SET DEFAULT nextval('user_role_id_seq'::regclass);


--
-- Name: user_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_products ALTER COLUMN user_id SET DEFAULT nextval('user_products_user_id_seq'::regclass);


--
-- Name: product_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_products ALTER COLUMN product_id SET DEFAULT nextval('user_products_product_id_seq'::regclass);


--
-- Name: access_log_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY access_log
    ADD CONSTRAINT "access_log_PK" PRIMARY KEY (id);


--
-- Name: bills_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY bills
    ADD CONSTRAINT "bills_PK" PRIMARY KEY (id);


--
-- Name: operation_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY operation
    ADD CONSTRAINT "operation_PK" PRIMARY KEY (id);


--
-- Name: payment_log_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY payment_log
    ADD CONSTRAINT "payment_log_PK" PRIMARY KEY (id);


--
-- Name: payment_methods_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY payment_methods
    ADD CONSTRAINT "payment_methods_PK" PRIMARY KEY (id);


--
-- Name: product_description_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY product_description
    ADD CONSTRAINT "product_description_PK" PRIMARY KEY (product_id);


--
-- Name: products_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY products
    ADD CONSTRAINT "products_PK" PRIMARY KEY (id);


--
-- Name: role_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY role
    ADD CONSTRAINT "role_PK" PRIMARY KEY (id);


--
-- Name: role_access_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY role_access
    ADD CONSTRAINT "role_access_PK" PRIMARY KEY (role_id, operation_id);


--
-- Name: user_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT "user_PK" PRIMARY KEY (id);


--
-- Name: user_products_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY user_products
    ADD CONSTRAINT "user_products_PK" PRIMARY KEY (user_id, product_id);


--
-- Name: access_log_FK_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY access_log
    ADD CONSTRAINT "access_log_FK_1" FOREIGN KEY (user_id) REFERENCES "user"(id);


--
-- Name: bills_FK_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bills
    ADD CONSTRAINT "bills_FK_1" FOREIGN KEY (payment_methods_id) REFERENCES payment_methods(id);


--
-- Name: bills_FK_2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bills
    ADD CONSTRAINT "bills_FK_2" FOREIGN KEY (user_id) REFERENCES "user"(id);


--
-- Name: payment_log_FK_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY payment_log
    ADD CONSTRAINT "payment_log_FK_1" FOREIGN KEY (bills_id) REFERENCES bills(id);


--
-- Name: product_description_FK_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product_description
    ADD CONSTRAINT "product_description_FK_1" FOREIGN KEY (product_id) REFERENCES products(id);


--
-- Name: products_FK_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY products
    ADD CONSTRAINT "products_FK_1" FOREIGN KEY (parent_id) REFERENCES products(id);


--
-- Name: role_access_FK_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY role_access
    ADD CONSTRAINT "role_access_FK_1" FOREIGN KEY (role_id) REFERENCES role(id);


--
-- Name: role_access_FK_2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY role_access
    ADD CONSTRAINT "role_access_FK_2" FOREIGN KEY (operation_id) REFERENCES operation(id);


--
-- Name: user_FK_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT "user_FK_1" FOREIGN KEY (role_id) REFERENCES role(id);


--
-- Name: user_products_FK_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_products
    ADD CONSTRAINT "user_products_FK_1" FOREIGN KEY (product_id) REFERENCES products(id);


--
-- Name: user_products_FK_2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY user_products
    ADD CONSTRAINT "user_products_FK_2" FOREIGN KEY (user_id) REFERENCES "user"(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

