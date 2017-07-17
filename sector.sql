INSERT INTO sectors (name) VALUES ('奶粉');
INSERT INTO sectors (name) VALUES ('奶瓶');
INSERT INTO sectors (name) VALUES ('水瓶');

INSERT INTO sub_sectors (name, sector_id) VALUES ('成人奶粉','1');
INSERT INTO sub_sectors (name, sector_id) VALUES ('婴儿奶粉1段','1');
INSERT INTO sub_sectors (name, sector_id) VALUES ('婴儿奶粉2段','1');

INSERT INTO questions (user_id, sector_id, sub_sector_id, content) VALUES ('1', '1', '2', '婴儿奶粉中添加的DHA到底是什么？');