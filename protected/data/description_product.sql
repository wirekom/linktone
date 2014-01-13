CREATE TABLE product_description (
    id integer NOT NULL,
    product_id integer NOT NULL,
    title character varying(255) NOT NULL,
    genre character varying,
    slug character varying(255),
    created time without time zone,
    updated timestamp without time zone,
    director character varying,
    actors text,
    description text,
    writer character varying,
    author character varying
);


CREATE SEQUENCE product_description_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE product_description_id_seq OWNED BY product_description.id;


--
-- Name: product_description_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('product_description_id_seq', 1, false);


--
-- Name: product_description_writer_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE product_description_writer_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

ALTER SEQUENCE product_description_writer_seq OWNED BY product_description.writer;


--
-- Name: product_description_writer_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('product_description_writer_seq', 1, false);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE product_description ALTER COLUMN id SET DEFAULT nextval('product_description_id_seq'::regclass);


--
-- Data for Name: product_description; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY product_description (id, product_id, title, genre, slug, created, updated, director, actors, description, writer, author) FROM stdin;
\.


--
-- Name: product_description_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY product_description
    ADD CONSTRAINT product_description_pkey PRIMARY KEY (id);


--
-- Name: product_description_product_id_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY product_description
    ADD CONSTRAINT product_description_product_id_key UNIQUE (product_id);


--
-- Name: product_description_product_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY product_description
    ADD CONSTRAINT product_description_product_id_fkey FOREIGN KEY (product_id) REFERENCES products(id) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

