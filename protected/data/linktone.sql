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
-- Name: products; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE products (
    id integer NOT NULL,
    name character varying(255),
    zte_product_code character varying(45),
    price double precision,
    parent_id integer,
    type_product_id integer NOT NULL
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

ALTER SEQUENCE products_type_product_id_seq OWNED BY products.type_product_id;


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
-- Name: type_product; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE type_product (
    id integer NOT NULL,
    name character varying(45)
);


ALTER TABLE public.type_product OWNER TO postgres;

--
-- Name: type_product_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE type_product_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.type_product_id_seq OWNER TO postgres;

--
-- Name: type_product_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE type_product_id_seq OWNED BY type_product.id;


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
    products_id integer NOT NULL,
    address text,
    province character varying(255)
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
-- Name: user_products_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE user_products_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_products_id_seq OWNER TO postgres;

--
-- Name: user_products_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE user_products_id_seq OWNED BY "user".products_id;


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
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY products ALTER COLUMN id SET DEFAULT nextval('products_id_seq'::regclass);


--
-- Name: type_product_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY products ALTER COLUMN type_product_id SET DEFAULT nextval('products_type_product_id_seq'::regclass);


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

ALTER TABLE ONLY type_product ALTER COLUMN id SET DEFAULT nextval('type_product_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user" ALTER COLUMN id SET DEFAULT nextval('user_id_seq'::regclass);


--
-- Name: role_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user" ALTER COLUMN role_id SET DEFAULT nextval('user_role_id_seq'::regclass);


--
-- Name: products_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user" ALTER COLUMN products_id SET DEFAULT nextval('user_products_id_seq'::regclass);


--
-- Data for Name: access_log; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY access_log (id, terminal_type, access_type, status_message, result, "timestamp", user_id) FROM stdin;
\.


--
-- Name: access_log_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('access_log_id_seq', 1, false);


--
-- Name: access_log_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('access_log_user_id_seq', 1, false);


--
-- Data for Name: bills; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY bills (id, amount, invoice_no, date_produced, due_date, payment_time, payment_methods_id, user_id) FROM stdin;
\.


--
-- Name: bills_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('bills_id_seq', 2, true);


--
-- Name: bills_payment_methods_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('bills_payment_methods_id_seq', 1, false);


--
-- Name: bills_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('bills_user_id_seq', 1, true);


--
-- Data for Name: operation; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY operation (id, name) FROM stdin;
117	accessLog.view
118	accessLog.admin
119	bills.view
120	bills.create
121	bills.update
122	bills.delete
123	bills.index
124	bills.admin
125	operation.create
126	operation.update
127	operation.delete
128	operation.admin
129	operation.generate
130	paymentLog.view
131	paymentLog.admin
132	paymentMethods.view
133	paymentMethods.create
134	paymentMethods.update
135	paymentMethods.delete
136	paymentMethods.index
137	paymentMethods.admin
138	products.view
139	products.create
140	products.update
141	products.delete
142	products.index
143	products.admin
144	roleAccess.view
145	roleAccess.create
146	roleAccess.update
147	roleAccess.delete
148	roleAccess.index
149	roleAccess.admin
150	role.view
151	role.create
152	role.update
153	role.delete
154	role.ajaxRevoke
155	role.index
156	role.admin
157	role.assign
158	role.ajaxAssign
159	site.index
160	site.error
161	site.login
162	site.logout
163	typeProduct.view
164	typeProduct.create
165	typeProduct.update
166	typeProduct.delete
167	typeProduct.index
168	typeProduct.admin
169	user.view
170	user.create
171	user.update
172	user.delete
173	user.index
174	user.admin
175	default.index
176	backend.default.index
177	backend.user.view
178	backend.user.create
179	backend.user.update
180	backend.user.delete
181	backend.user.index
182	backend.user.admin
\.


--
-- Name: operation_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('operation_id_seq', 182, true);


--
-- Data for Name: payment_log; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY payment_log (id, ref_no, tranx_id, response_code, rc, amount, "timestamp", bills_id) FROM stdin;
\.


--
-- Name: payment_log_bills_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('payment_log_bills_id_seq', 1, false);


--
-- Name: payment_log_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('payment_log_id_seq', 1, false);


--
-- Data for Name: payment_methods; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY payment_methods (id, payment_name) FROM stdin;
1	test
\.


--
-- Name: payment_methods_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('payment_methods_id_seq', 1, true);


--
-- Data for Name: products; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY products (id, name, zte_product_code, price, parent_id, type_product_id) FROM stdin;
1	test	terser	9000	\N	1
2	test product	DD344	7000	\N	2
4	test ss	dsd4	8000	1	1
\.


--
-- Name: products_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('products_id_seq', 4, true);


--
-- Name: products_parent_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('products_parent_id_seq', 1, true);


--
-- Name: products_type_product_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('products_type_product_id_seq', 3, true);


--
-- Data for Name: role; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY role (id, name) FROM stdin;
4	guest
2	Super Admin
3	general-user
\.


--
-- Data for Name: role_access; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY role_access (role_id, operation_id) FROM stdin;
2	117
2	118
2	119
2	120
2	121
2	122
2	123
2	124
2	125
2	126
2	127
2	128
2	129
2	130
2	131
2	132
2	133
2	134
2	135
2	136
2	137
2	138
2	139
2	140
2	141
2	142
2	143
2	144
2	145
2	146
2	147
2	148
2	149
2	150
2	151
2	152
2	153
2	154
2	155
2	156
2	157
2	158
2	159
2	160
2	161
2	162
2	163
2	164
2	165
2	166
2	167
2	168
2	169
2	170
2	171
2	172
2	173
2	174
2	175
2	176
2	177
2	178
2	179
2	180
2	181
2	182
3	119
3	120
3	123
3	130
3	131
3	136
3	138
3	142
3	163
3	167
3	169
3	170
3	171
3	173
\.


--
-- Name: role_access_operation_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('role_access_operation_id_seq', 1, false);


--
-- Name: role_access_role_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('role_access_role_id_seq', 1, false);


--
-- Name: role_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('role_id_seq', 4, true);


--
-- Data for Name: type_product; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY type_product (id, name) FROM stdin;
1	type a
2	type b
\.


--
-- Name: type_product_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('type_product_id_seq', 2, true);


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "user" (id, username, password, email, birthdate, surename, lastname, status, role_id, products_id, address, province) FROM stdin;
17	admin	d033e22ae348aeb5660fc2140aec35850c4da997	admin@gmail.com	2013-12-27	Administrator	System	1	2	2	\N	\N
18	widodo	f34fd37bff076dba7b27785668a1369221118ca7	widodo@gmail.com	1988-06-28	Widodo	Pangestu	22	3	1	\N	\N
\.


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('user_id_seq', 18, true);


--
-- Name: user_products_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('user_products_id_seq', 15, true);


--
-- Name: user_role_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('user_role_id_seq', 15, true);


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
-- Name: type_product_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY type_product
    ADD CONSTRAINT "type_product_PK" PRIMARY KEY (id);


--
-- Name: user_PK; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT "user_PK" PRIMARY KEY (id);


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
-- Name: products_FK_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY products
    ADD CONSTRAINT "products_FK_1" FOREIGN KEY (parent_id) REFERENCES products(id);


--
-- Name: products_FK_2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY products
    ADD CONSTRAINT "products_FK_2" FOREIGN KEY (type_product_id) REFERENCES type_product(id);


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
-- Name: user_FK_2; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT "user_FK_2" FOREIGN KEY (products_id) REFERENCES products(id);


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

