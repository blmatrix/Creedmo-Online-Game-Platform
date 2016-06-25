<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-12-21 00:35:35 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 96c08f85-c1ab-486d-8381-b9abf8bf0263
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 00:35:36 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
)

ERROR - 2015-12-21 00:35:36 --> MG_play_check_url
ERROR - 2015-12-21 00:35:36 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
ERROR - 2015-12-21 00:36:11 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 96c08f85-c1ab-486d-8381-b9abf8bf0263
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 00:36:11 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGJBS4254&password=Q5RbTMpzBy&ul=en
)

ERROR - 2015-12-21 00:36:11 --> MG_play_check_url
ERROR - 2015-12-21 00:36:11 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGJBS4254&password=Q5RbTMpzBy&ul=en
ERROR - 2015-12-21 00:39:52 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 96c08f85-c1ab-486d-8381-b9abf8bf0263
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 00:39:52 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
)

ERROR - 2015-12-21 00:39:52 --> MG_play_check_url
ERROR - 2015-12-21 00:39:52 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
ERROR - 2015-12-21 01:49:34 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-21 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-21 02:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-20T20:00:00
            [end_time] => 2015-12-20T23:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-20 20:00:00
            [end_time] => 2015-12-20 23:00:00
        )

)

ERROR - 2015-12-21 02:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-21 02:00:01 --> MG start_date ===> 2015-12-20T20:00:00
ERROR - 2015-12-21 02:00:01 --> MG end_date ===> 2015-12-20T20:00:00
ERROR - 2015-12-21 02:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => a7c80cb2-58bc-4dbd-973f-9673b8db3d89
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 02:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 6bd05a57-c3e7-46cd-9fc6-c03f5060f8d9
        )

)

ERROR - 2015-12-21 02:00:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 2
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-20T21:00:00</Date><Label_Player>MXMGSSS6195842</Label_Player><Currency>KRW</Currency><GameName>Casino Hold'em (Diamond)</GameName><GameCategory>Diamond LG Casino Hold'em</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>150000.0000</BetAmount><PayoutAmount>60000.0000</PayoutAmount><GrossWin>90000.0000</GrossWin><NumBets>4</NumBets><PayoutCount>2</PayoutCount><MaxBet>30000.0000</MaxBet><MaxPayoutAmount>30000.0000</MaxPayoutAmount><AveragePayoutAmount>30000.0000</AveragePayoutAmount><AverageBetAmount>37500.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-20T21:00:00</Date><Label_Player>MXMGSSS6195842</Label_Player><Currency>KRW</Currency><GameName>MP Baccarat (Diamond)</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>25000.0000</BetAmount><PayoutAmount>0.0000</PayoutAmount><GrossWin>25000.0000</GrossWin><NumBets>1</NumBets><PayoutCount>0</PayoutCount><MaxBet>25000.0000</MaxBet><MaxPayoutAmount>0.0000</MaxPayoutAmount><AveragePayoutAmount>0.0000</AveragePayoutAmount><AverageBetAmount>25000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => 6bd05a57-c3e7-46cd-9fc6-c03f5060f8d9
        )

)

ERROR - 2015-12-21 02:00:04 --> Response Code  : Normal
ERROR - 2015-12-21 02:00:04 --> cur_page
ERROR - 2015-12-21 02:00:04 --> 2
ERROR - 2015-12-21 02:00:04 --> MG Game fetch .....11111
ERROR - 2015-12-21 02:00:04 --> Array
(
    [0] => Array
        (
            [player_name] => MXMGSSS6195842
            [vender_code] => 2
            [game_type] => Diamond LG Casino Hold'em
            [game_name] => Casino Hold'em (Diamond)
            [play_date_int] => 1450612800
            [play_date_str] => 2015-12-20T21:00:00
            [game_play_count] => -1
            [bet_amount] => 150000
            [payout_amount] => 60000
            [win_amount] => -90000
            [distribute_type] => NON_SLOTS
            [distribute_rate] => 0.011
            [acc_comp_point] => 1650
            [reg_date] => 1450630804
        )

    [1] => Array
        (
            [player_name] => MXMGSSS6195842
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => MP Baccarat (Diamond)
            [play_date_int] => 1450612800
            [play_date_str] => 2015-12-20T21:00:00
            [game_play_count] => -1
            [bet_amount] => 25000
            [payout_amount] => 0
            [win_amount] => -25000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 250
            [reg_date] => 1450630804
        )

)

ERROR - 2015-12-21 02:00:04 --> key ====> MXMGSSS6195842
ERROR - 2015-12-21 02:00:04 --> 변환 -------   SSS6195842
ERROR - 2015-12-21 02:00:04 --> Array
(
    [MXMGSSS6195842] => Array
        (
            [total_acc_comp_point] => 1900
            [user_no] => 690
            [user_id] => SSS6195842
        )

)

ERROR - 2015-12-21 02:00:04 --> arr_length ------> 1
ERROR - 2015-12-21 02:00:04 --> tmp_amount ------------------>1900
ERROR - 2015-12-21 02:00:04 --> tmp_comp ------------------>1900
ERROR - 2015-12-21 02:00:04 --> comp point update batch query
ERROR - 2015-12-21 02:00:04 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 690 THEN comp_point + 1900 ELSE comp_point END WHERE user_no in (690)
ERROR - 2015-12-21 02:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-21 02:00:04 --> MG Game play update result
ERROR - 2015-12-21 02:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450609200
    [update_end_time] => 1450620000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 2
    [complete_time] => 1450630804
    [reg_date] => 1450630804
)

ERROR - 2015-12-21 03:17:27 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-21 03:17:33 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b2a80ed3-c0fb-43d7-b0e0-2c02b2f54443
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 03:17:33 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => BFMGWORLDLY9999
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => BFMGWORLDLY9999
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-20T18:17:33
            [EMail] => 
            [CreditBalance] => 36.95
            [Balance] => 36950
            [ProfileId] => 253
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 03:17:34 --> PT_request info
ERROR - 2015-12-21 03:17:34 --> https://kioskpublicapi.redhorse88.com/player/info/playername/BFPTWORLDLY9999/with3RDPData/1
ERROR - 2015-12-21 03:17:34 --> {"result":{"ADDRESS":"NA","ADVERTISER":"default71","BALANCE":"0","BANNERID":"-","BIRTHDATE":"1950-01-01","BONUSBALANCE":"0","CASINONAME":"luckystar88","CASINONICKNAME":false,"CELLPHONE":null,"CITY":"NA","CLIENTSKIN":"luckystar88","CLIENTTYPE":"casino","CODE":"17894670","COMMENTS":"Created through Public API. ","COMPPOINTS":"0","COUNTRYCODE":"CN","CREFERER":[],"CURRENCY":"CNY","CURRENCYCODE":"CNY","CURRENTBET":"0","CURRENTBONUSBET":"0","CUSTOM01":"GLOBAL","EMAIL":"bfptworldly9999@bigchina.com","FAX":"11111","FIRSTNAME":"NA","FROZEN":"0","INTERNAL":"0","ISINGAME":false,"KIOSKADMINNAME":"bigchina","KIOSKNAME":"BAOFA88","LANGUAGECODE":"EN","LASTDEPOSITDATE":null,"LASTLOGINDATE":false,"LASTNAME":"NA","LASTWITHDRAWALDATE":null,"LOCKEDMINUTES":0,"MAXBALANCE":"0","NETLOSS":null,"NETWORKNICKNAMES":[],"NOBONUS":"0","OCCUPATION":null,"PASSWORD":"62EB339D710466A45E67877B9AE83A5CEF554C4B","PENDINGBONUSBALANCE":"0","PHONE":"11111","PLAYERNAME":"BFPTWORLDLY9999","RC_BALANCE":0,"RESERVEDBALANCE":"0","SERIAL":"71W20CARDUSER1449751123","SEX":null,"SIGNUPCLIENTPLATFORM":"download","SIGNUPDATE":"2015-12-10 20:38:43","STATE":"NA","SUSPENDED":0,"TITLE":null,"TOTALCOMPPOINTS":"0","TOTALDEPOSITS":null,"TOTALWITHDRAWALS":null,"TRACKINGID":false,"VIPLEVEL":"1","WANTMAIL":1,"WORKPHONE":null,"ZIP":"NA","3RDPData":"No data found"}}
ERROR - 2015-12-21 03:17:34 --> Severity: Notice --> Trying to get property of non-object /www/game_offline/application/controllers/Member.php 384
ERROR - 2015-12-21 03:43:22 --> 404 Page Not Found: Adminm/index
ERROR - 2015-12-21 03:43:28 --> 404 Page Not Found: Admim/index
ERROR - 2015-12-21 03:43:39 --> 404 Page Not Found: Admim/index
ERROR - 2015-12-21 03:45:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-21 03:46:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 8999c78b-b4e8-4f73-aed1-880b47fbc007
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 03:46:03 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=en
)

ERROR - 2015-12-21 03:46:03 --> MG_play_check_url
ERROR - 2015-12-21 03:46:03 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=en
ERROR - 2015-12-21 05:00:02 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-21 05:00:02 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-20T23:00:00
            [end_time] => 2015-12-21T02:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-20 23:00:00
            [end_time] => 2015-12-21 02:00:00
        )

)

ERROR - 2015-12-21 05:00:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-21 05:00:02 --> MG start_date ===> 2015-12-20T23:00:00
ERROR - 2015-12-21 05:00:02 --> MG end_date ===> 2015-12-20T23:00:00
ERROR - 2015-12-21 05:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 772ccdce-2644-477d-9241-6cd12966a0c6
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 05:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 0a148bdf-bd6e-4769-975e-748394bbdb7c
        )

)

ERROR - 2015-12-21 05:00:06 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 0a148bdf-bd6e-4769-975e-748394bbdb7c
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-21 05:00:06 --> Response Code  : NotInCache
ERROR - 2015-12-21 05:00:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 47625bcf-6648-4d0b-9daa-4b8ec99a61e9
        )

)

ERROR - 2015-12-21 05:00:08 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 47625bcf-6648-4d0b-9daa-4b8ec99a61e9
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-21 05:00:08 --> Response Code  : NotInCache
ERROR - 2015-12-21 05:00:11 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 4c54e022-fa0b-46c3-857d-ea80dce90324
        )

)

ERROR - 2015-12-21 05:00:12 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 4c54e022-fa0b-46c3-857d-ea80dce90324
        )

)

ERROR - 2015-12-21 05:00:12 --> Response Code  : Normal
ERROR - 2015-12-21 05:00:12 --> cur_page
ERROR - 2015-12-21 05:00:12 --> 2
ERROR - 2015-12-21 05:00:12 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-21 05:00:12 --> MG Game play update result
ERROR - 2015-12-21 05:00:12 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450620000
    [update_end_time] => 1450630800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450641612
    [reg_date] => 1450641612
)

ERROR - 2015-12-21 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-21 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-21T02:00:00
            [end_time] => 2015-12-21T05:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-21 02:00:00
            [end_time] => 2015-12-21 05:00:00
        )

)

ERROR - 2015-12-21 08:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-21 08:00:01 --> MG start_date ===> 2015-12-21T02:00:00
ERROR - 2015-12-21 08:00:01 --> MG end_date ===> 2015-12-21T02:00:00
ERROR - 2015-12-21 08:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => a1306ef9-bc02-48a4-9609-8f4f32e2d78e
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 08:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 1dbfd1f7-c827-4965-8809-e7c54b2a931f
        )

)

ERROR - 2015-12-21 08:00:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 1dbfd1f7-c827-4965-8809-e7c54b2a931f
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-21 08:00:05 --> Response Code  : NotInCache
ERROR - 2015-12-21 08:00:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 6951f5f0-f077-4d83-aa7a-8e5c04adee56
        )

)

ERROR - 2015-12-21 08:00:10 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => 6951f5f0-f077-4d83-aa7a-8e5c04adee56
        )

)

ERROR - 2015-12-21 08:00:10 --> Response Code  : Normal
ERROR - 2015-12-21 08:00:10 --> cur_page
ERROR - 2015-12-21 08:00:10 --> 2
ERROR - 2015-12-21 08:00:10 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-21 08:00:10 --> MG Game play update result
ERROR - 2015-12-21 08:00:10 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450630800
    [update_end_time] => 1450641600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450652410
    [reg_date] => 1450652410
)

ERROR - 2015-12-21 08:30:52 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => a1306ef9-bc02-48a4-9609-8f4f32e2d78e
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 08:30:52 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => MXMGSSS6195842
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => MXMGSSS6195842
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-20T23:30:52
            [EMail] => 
            [CreditBalance] => 0
            [Balance] => 0
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 08:30:53 --> PT_request info
ERROR - 2015-12-21 08:30:53 --> https://kioskpublicapi.redhorse88.com/player/info/playername/MXPTSSS6195842/with3RDPData/1
ERROR - 2015-12-21 08:30:53 --> {"result":{"ADDRESS":"NA","ADVERTISER":"default71","BALANCE":"0","BANNERID":"-","BIRTHDATE":"1950-01-01","BONUSBALANCE":"0","CASINONAME":"luckystar88","CASINONICKNAME":false,"CELLPHONE":null,"CITY":"NA","CLIENTSKIN":"luckystar88","CLIENTTYPE":"casino","CODE":"18153434","COMMENTS":"Created through Public API. ","COMPPOINTS":"0","COUNTRYCODE":"CN","CREFERER":[],"CURRENCY":"CNY","CURRENCYCODE":"CNY","CURRENTBET":"0","CURRENTBONUSBET":"0","CUSTOM01":"GLOBAL","EMAIL":"mxptsss6195842@bigchina.com","FAX":"11111","FIRSTNAME":"NA","FROZEN":"0","INTERNAL":"0","ISINGAME":false,"KIOSKADMINNAME":"bigchina","KIOSKNAME":"BAOFA88","LANGUAGECODE":"EN","LASTDEPOSITDATE":null,"LASTLOGINDATE":false,"LASTNAME":"NA","LASTWITHDRAWALDATE":null,"LOCKEDMINUTES":0,"MAXBALANCE":"0","NETLOSS":null,"NETWORKNICKNAMES":[],"NOBONUS":"0","OCCUPATION":null,"PASSWORD":"E20850D4780EC79D52DBFE402F696D85453DDDE2","PENDINGBONUSBALANCE":"0","PHONE":"11111","PLAYERNAME":"MXPTSSS6195842","RC_BALANCE":0,"RESERVEDBALANCE":"0","SERIAL":"71W20CARDUSER1450614156","SEX":null,"SIGNUPCLIENTPLATFORM":"download","SIGNUPDATE":"2015-12-20 20:22:35","STATE":"NA","SUSPENDED":0,"TITLE":null,"TOTALCOMPPOINTS":"0","TOTALDEPOSITS":null,"TOTALWITHDRAWALS":null,"TRACKINGID":false,"VIPLEVEL":"1","WANTMAIL":1,"WORKPHONE":null,"ZIP":"NA","3RDPData":"No data found"}}
ERROR - 2015-12-21 08:30:53 --> Severity: Notice --> Trying to get property of non-object /www/game_offline/application/controllers/Member.php 384
ERROR - 2015-12-21 09:54:38 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 58dfdc33-9614-498a-8eb2-a606cf65d450
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 09:54:39 --> MG Request Deposit ===> stdClass Object
(
    [DepositResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => SUCCEED
            [TransactionReferenceNumber] => 
            [TransactionAmount] => 315000
            [TransactionCreditAmount] => 315
            [TransactionId] => 244182728
            [AccountNumber] => MXMGSSS6195842
            [CreditBalance] => 315
            [Balance] => 315000
        )

)

ERROR - 2015-12-21 09:54:39 --> MG trans deposit
ERROR - 2015-12-21 10:03:53 --> 404 Page Not Found: Adminphp/index
ERROR - 2015-12-21 10:03:54 --> 404 Page Not Found: Administrator/index.php
ERROR - 2015-12-21 10:03:55 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2015-12-21 10:05:25 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 58dfdc33-9614-498a-8eb2-a606cf65d450
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 10:05:25 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => MXMGSSS6195842
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => MXMGSSS6195842
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T01:05:25
            [EMail] => 
            [CreditBalance] => 148
            [Balance] => 148000
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 10:08:25 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 58dfdc33-9614-498a-8eb2-a606cf65d450
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 10:08:26 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => MXMGSSS6195842
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => MXMGSSS6195842
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T01:08:26
            [EMail] => 
            [CreditBalance] => 248
            [Balance] => 248000
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 10:19:21 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 58dfdc33-9614-498a-8eb2-a606cf65d450
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 10:19:21 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => MXMGSSS6195842
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => MXMGSSS6195842
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T01:19:21
            [EMail] => 
            [CreditBalance] => 338
            [Balance] => 338000
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 10:22:27 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 58dfdc33-9614-498a-8eb2-a606cf65d450
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 10:22:27 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => MXMGSSS6195842
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => MXMGSSS6195842
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T01:22:27
            [EMail] => 
            [CreditBalance] => 188
            [Balance] => 188000
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 10:24:59 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 58dfdc33-9614-498a-8eb2-a606cf65d450
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 10:24:59 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => MXMGSSS6195842
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => MXMGSSS6195842
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T01:24:59
            [EMail] => 
            [CreditBalance] => 288
            [Balance] => 288000
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 10:27:04 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 58dfdc33-9614-498a-8eb2-a606cf65d450
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 10:27:04 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => MXMGSSS6195842
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => MXMGSSS6195842
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T01:27:04
            [EMail] => 
            [CreditBalance] => 243
            [Balance] => 243000
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 10:29:39 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 58dfdc33-9614-498a-8eb2-a606cf65d450
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 10:29:39 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => MXMGSSS6195842
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => MXMGSSS6195842
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T01:29:39
            [EMail] => 
            [CreditBalance] => 295.25
            [Balance] => 295250
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 10:34:17 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b86ba685-4539-401f-ae22-0c18dd8ada8a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 10:34:18 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
)

ERROR - 2015-12-21 10:34:18 --> MG_play_check_url
ERROR - 2015-12-21 10:34:18 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
ERROR - 2015-12-21 10:35:40 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b86ba685-4539-401f-ae22-0c18dd8ada8a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 10:35:41 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
)

ERROR - 2015-12-21 10:35:41 --> MG_play_check_url
ERROR - 2015-12-21 10:35:41 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
ERROR - 2015-12-21 10:38:13 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 58dfdc33-9614-498a-8eb2-a606cf65d450
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 10:38:14 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => MXMGSSS6195842
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => MXMGSSS6195842
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T01:38:14
            [EMail] => 
            [CreditBalance] => 245.25
            [Balance] => 245250
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-21 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-21T05:00:00
            [end_time] => 2015-12-21T08:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-21 05:00:00
            [end_time] => 2015-12-21 08:00:00
        )

)

ERROR - 2015-12-21 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-21 11:00:01 --> MG start_date ===> 2015-12-21T05:00:00
ERROR - 2015-12-21 11:00:01 --> MG end_date ===> 2015-12-21T05:00:00
ERROR - 2015-12-21 11:00:04 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 58dfdc33-9614-498a-8eb2-a606cf65d450
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 11:00:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b8d940d0-ba28-4996-8083-99a17589942c
        )

)

ERROR - 2015-12-21 11:00:08 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => b8d940d0-ba28-4996-8083-99a17589942c
        )

)

ERROR - 2015-12-21 11:00:08 --> Response Code  : Normal
ERROR - 2015-12-21 11:00:08 --> cur_page
ERROR - 2015-12-21 11:00:08 --> 2
ERROR - 2015-12-21 11:00:08 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-21 11:00:08 --> MG Game play update result
ERROR - 2015-12-21 11:00:08 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450641600
    [update_end_time] => 1450652400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450663208
    [reg_date] => 1450663208
)

ERROR - 2015-12-21 11:04:14 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-21 11:12:51 --> stdClass Object
(
    [user_no] => 681
    [language_no] => 2
    [country_no] => 53607
    [user_nick] => 
    [user_level_no] => 1
    [user_id] => MAXLIVE4
    [user_password] => 96e79218965eb72c92a549dd5a330112
    [user_name] => 맥스4
    [user_email] => 
    [user_phone] => 01055559999
    [user_type] => 2
    [affiliate_code] => B70865
    [affiliate_ref] => 672
    [is_affiliate] => Y
    [via_url] => 
    [join_url] => 
    [user_locale] => 
    [login_status] => N
    [user_gender] => 
    [user_status] => 4
    [deps1_child_count] => 9
    [deps2_child_count] => 0
    [agree_adult] => Y
    [language_name] => 
    [im_type] => 
    [im_id] => 
    [city] => 
    [user_des] => 
    [affiliate_des] => 
    [lft] => 
    [rgt] => 
    [mg_id] => BFMGMAXLIVE4
    [mg_password] => NHbp6BnYL5
    [mg_game_status] => Y
    [pt_id] => BFPTMAXLIVE4
    [pt_password] => NHbp6BnYL5
    [pt_game_status] => Y
    [first_deposit] => N
    [join_ip] => 175.195.11.15
    [join_date] => 1449746869
    [reg_date] => 1449746869
    [confirm_date] => 1449746869
    [agree_term] => Y
)

ERROR - 2015-12-21 11:12:51 --> MAXLIVE4
ERROR - 2015-12-21 11:12:53 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b86ba685-4539-401f-ae22-0c18dd8ada8a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 11:12:53 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=en
)

ERROR - 2015-12-21 11:12:53 --> MG_play_check_url
ERROR - 2015-12-21 11:12:53 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=en
ERROR - 2015-12-21 11:14:04 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b86ba685-4539-401f-ae22-0c18dd8ada8a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 11:14:04 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
)

ERROR - 2015-12-21 11:14:04 --> MG_play_check_url
ERROR - 2015-12-21 11:14:04 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
ERROR - 2015-12-21 11:15:31 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b86ba685-4539-401f-ae22-0c18dd8ada8a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 11:15:31 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
)

ERROR - 2015-12-21 11:15:31 --> MG_play_check_url
ERROR - 2015-12-21 11:15:31 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
ERROR - 2015-12-21 11:18:35 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b86ba685-4539-401f-ae22-0c18dd8ada8a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 11:18:35 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
)

ERROR - 2015-12-21 11:18:35 --> MG_play_check_url
ERROR - 2015-12-21 11:18:35 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
ERROR - 2015-12-21 11:20:37 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b86ba685-4539-401f-ae22-0c18dd8ada8a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 11:20:37 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
)

ERROR - 2015-12-21 11:20:37 --> MG_play_check_url
ERROR - 2015-12-21 11:20:37 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=en
ERROR - 2015-12-21 12:01:26 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 58dfdc33-9614-498a-8eb2-a606cf65d450
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 12:01:26 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => The session has expired – log in again.
            [IsSucceed] => 
            [ErrorCode] => 62
            [ErrorId] => 765163536847
            [RelatedProduct] => All
            [AccountStatus] => Unknown
            [SuspendAccountStatus] => Unknown
            [LastEditDate] => 0001-01-01T00:00:00
            [CreditBalance] => 0
            [Balance] => 0
            [ProfileId] => 0
            [RngBettingProfileId] => 0
        )

)

ERROR - 2015-12-21 12:01:27 --> PT_request info
ERROR - 2015-12-21 12:01:27 --> https://kioskpublicapi.redhorse88.com/player/info/playername/BFPTMAXLIVE4/with3RDPData/1
ERROR - 2015-12-21 12:01:27 --> {"result":{"ADDRESS":"NA","ADVERTISER":"default71","BALANCE":"0","BANNERID":"-","BIRTHDATE":"1950-01-01","BONUSBALANCE":"0","CASINONAME":"luckystar88","CASINONICKNAME":false,"CELLPHONE":null,"CITY":"NA","CLIENTSKIN":"luckystar88","CLIENTTYPE":"casino","CODE":"17893362","COMMENTS":"Created through Public API. ","COMPPOINTS":"0","COUNTRYCODE":"CN","CREFERER":[],"CURRENCY":"CNY","CURRENCYCODE":"CNY","CURRENTBET":"0","CURRENTBONUSBET":"0","CUSTOM01":"GLOBAL","EMAIL":"bfptmaxlive4@bigchina.com","FAX":"11111","FIRSTNAME":"NA","FROZEN":"0","INTERNAL":"0","ISINGAME":false,"KIOSKADMINNAME":"bigchina","KIOSKNAME":"BAOFA88","LANGUAGECODE":"EN","LASTDEPOSITDATE":null,"LASTLOGINDATE":false,"LASTNAME":"NA","LASTWITHDRAWALDATE":null,"LOCKEDMINUTES":0,"MAXBALANCE":"0","NETLOSS":null,"NETWORKNICKNAMES":[],"NOBONUS":"0","OCCUPATION":null,"PASSWORD":"B13370CD2BA5038615630FE79C65225646F9918E","PENDINGBONUSBALANCE":"0","PHONE":"11111","PLAYERNAME":"BFPTMAXLIVE4","RC_BALANCE":0,"RESERVEDBALANCE":"0","SERIAL":"71W20CARDUSER1449746871","SEX":null,"SIGNUPCLIENTPLATFORM":"download","SIGNUPDATE":"2015-12-10 19:27:50","STATE":"NA","SUSPENDED":0,"TITLE":null,"TOTALCOMPPOINTS":"0","TOTALDEPOSITS":null,"TOTALWITHDRAWALS":null,"TRACKINGID":false,"VIPLEVEL":"1","WANTMAIL":1,"WORKPHONE":null,"ZIP":"NA","3RDPData":"No data found"}}
ERROR - 2015-12-21 12:01:27 --> Severity: Notice --> Trying to get property of non-object /www/game_offline/application/controllers/Member.php 384
ERROR - 2015-12-21 12:06:18 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b86ba685-4539-401f-ae22-0c18dd8ada8a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 12:06:19 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGTEST112&password=mWjslQMIzB&ul=en
)

ERROR - 2015-12-21 12:06:19 --> MG_play_check_url
ERROR - 2015-12-21 12:06:19 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGTEST112&password=mWjslQMIzB&ul=en
ERROR - 2015-12-21 12:06:30 --> Query error: Unknown column '93279e3308bdbbeed946fc965017f67a' in 'field list' - Invalid query: UPDATE `user` SET `93279e3308bdbbeed946fc965017f67a` = ''
WHERE `user_no` = '672'
ERROR - 2015-12-21 12:06:36 --> Query error: Unknown column '93279e3308bdbbeed946fc965017f67a' in 'field list' - Invalid query: UPDATE `user` SET `93279e3308bdbbeed946fc965017f67a` = ''
WHERE `user_no` = '672'
ERROR - 2015-12-21 12:06:40 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b86ba685-4539-401f-ae22-0c18dd8ada8a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 12:06:41 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGTEST112&password=mWjslQMIzB&ul=en
)

ERROR - 2015-12-21 12:06:41 --> MG_play_check_url
ERROR - 2015-12-21 12:06:41 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGTEST112&password=mWjslQMIzB&ul=en
ERROR - 2015-12-21 12:06:56 --> Query error: Unknown column '93279e3308bdbbeed946fc965017f67a' in 'field list' - Invalid query: UPDATE `user` SET `93279e3308bdbbeed946fc965017f67a` = ''
WHERE `user_no` = '672'
ERROR - 2015-12-21 12:08:37 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b86ba685-4539-401f-ae22-0c18dd8ada8a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 12:08:38 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=en
)

ERROR - 2015-12-21 12:08:38 --> MG_play_check_url
ERROR - 2015-12-21 12:08:38 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=en
ERROR - 2015-12-21 12:09:35 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 9f44fcdb-718b-4229-b4de-32370214cec4
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 12:09:35 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => BFMGMAXLIVE4
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => BFMGMAXLIVE4
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T03:09:35
            [EMail] => 
            [CreditBalance] => 431.1
            [Balance] => 431100
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 12:09:36 --> PT_request info
ERROR - 2015-12-21 12:09:36 --> https://kioskpublicapi.redhorse88.com/player/info/playername/BFPTMAXLIVE4/with3RDPData/1
ERROR - 2015-12-21 12:09:36 --> {"result":{"ADDRESS":"NA","ADVERTISER":"default71","BALANCE":"0","BANNERID":"-","BIRTHDATE":"1950-01-01","BONUSBALANCE":"0","CASINONAME":"luckystar88","CASINONICKNAME":false,"CELLPHONE":null,"CITY":"NA","CLIENTSKIN":"luckystar88","CLIENTTYPE":"casino","CODE":"17893362","COMMENTS":"Created through Public API. ","COMPPOINTS":"0","COUNTRYCODE":"CN","CREFERER":[],"CURRENCY":"CNY","CURRENCYCODE":"CNY","CURRENTBET":"0","CURRENTBONUSBET":"0","CUSTOM01":"GLOBAL","EMAIL":"bfptmaxlive4@bigchina.com","FAX":"11111","FIRSTNAME":"NA","FROZEN":"0","INTERNAL":"0","ISINGAME":false,"KIOSKADMINNAME":"bigchina","KIOSKNAME":"BAOFA88","LANGUAGECODE":"EN","LASTDEPOSITDATE":null,"LASTLOGINDATE":false,"LASTNAME":"NA","LASTWITHDRAWALDATE":null,"LOCKEDMINUTES":0,"MAXBALANCE":"0","NETLOSS":null,"NETWORKNICKNAMES":[],"NOBONUS":"0","OCCUPATION":null,"PASSWORD":"B13370CD2BA5038615630FE79C65225646F9918E","PENDINGBONUSBALANCE":"0","PHONE":"11111","PLAYERNAME":"BFPTMAXLIVE4","RC_BALANCE":0,"RESERVEDBALANCE":"0","SERIAL":"71W20CARDUSER1449746871","SEX":null,"SIGNUPCLIENTPLATFORM":"download","SIGNUPDATE":"2015-12-10 19:27:50","STATE":"NA","SUSPENDED":0,"TITLE":null,"TOTALCOMPPOINTS":"0","TOTALDEPOSITS":null,"TOTALWITHDRAWALS":null,"TRACKINGID":false,"VIPLEVEL":"1","WANTMAIL":1,"WORKPHONE":null,"ZIP":"NA","3RDPData":"No data found"}}
ERROR - 2015-12-21 12:09:36 --> Severity: Notice --> Trying to get property of non-object /www/game_offline/application/controllers/Member.php 384
ERROR - 2015-12-21 12:10:26 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => b86ba685-4539-401f-ae22-0c18dd8ada8a
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 12:10:30 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=en
)

ERROR - 2015-12-21 12:10:30 --> MG_play_check_url
ERROR - 2015-12-21 12:10:30 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=en
ERROR - 2015-12-21 12:13:04 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 9f44fcdb-718b-4229-b4de-32370214cec4
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 12:13:09 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=ko
)

ERROR - 2015-12-21 12:13:09 --> MG_play_check_url
ERROR - 2015-12-21 12:13:09 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=BFMGMAXLIVE4&password=NHbp6BnYL5&ul=ko
ERROR - 2015-12-21 13:21:19 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2015-12-21 13:21:20 --> 404 Page Not Found: Administrator/index.php
ERROR - 2015-12-21 14:00:02 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-21 14:00:02 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-21T08:00:00
            [end_time] => 2015-12-21T10:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-21 08:00:00
            [end_time] => 2015-12-21 11:00:00
        )

)

ERROR - 2015-12-21 14:00:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-21 14:00:02 --> MG start_date ===> 2015-12-21T08:00:00
ERROR - 2015-12-21 14:00:02 --> MG end_date ===> 2015-12-21T08:00:00
ERROR - 2015-12-21 14:00:03 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => c7da62d9-6c15-4ad8-adeb-53a982b7e71c
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 14:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => c71e9a70-3b86-44c6-b009-b64a954f4948
        )

)

ERROR - 2015-12-21 14:00:05 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 2
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-21T10:00:00</Date><Label_Player>MXMGSSS6195842</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond) - Playboy</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>590000.0000</BetAmount><PayoutAmount>882250.0000</PayoutAmount><GrossWin>-292250.0000</GrossWin><NumBets>14</NumBets><PayoutCount>12</PayoutCount><MaxBet>50000.0000</MaxBet><MaxPayoutAmount>100000.0000</MaxPayoutAmount><AveragePayoutAmount>73520.8333</AveragePayoutAmount><AverageBetAmount>42142.8571</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-21T10:00:00</Date><Label_Player>MXMGSSS6195842</Label_Player><Currency>KRW</Currency><GameName>Casino Hold'em (Diamond)</GameName><GameCategory>Diamond LG Casino Hold'em</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>414000.0000</BetAmount><PayoutAmount>52000.0000</PayoutAmount><GrossWin>362000.0000</GrossWin><NumBets>6</NumBets><PayoutCount>2</PayoutCount><MaxBet>80000.0000</MaxBet><MaxPayoutAmount>26000.0000</MaxPayoutAmount><AveragePayoutAmount>26000.0000</AveragePayoutAmount><AverageBetAmount>69000.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => c71e9a70-3b86-44c6-b009-b64a954f4948
        )

)

ERROR - 2015-12-21 14:00:05 --> Response Code  : Normal
ERROR - 2015-12-21 14:00:05 --> cur_page
ERROR - 2015-12-21 14:00:05 --> 2
ERROR - 2015-12-21 14:00:05 --> MG Game fetch .....11111
ERROR - 2015-12-21 14:00:05 --> Array
(
    [0] => Array
        (
            [player_name] => MXMGSSS6195842
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond) - Playboy
            [play_date_int] => 1450659600
            [play_date_str] => 2015-12-21T10:00:00
            [game_play_count] => -1
            [bet_amount] => 590000
            [payout_amount] => 882250
            [win_amount] => 292250
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 5900
            [reg_date] => 1450674005
        )

    [1] => Array
        (
            [player_name] => MXMGSSS6195842
            [vender_code] => 2
            [game_type] => Diamond LG Casino Hold'em
            [game_name] => Casino Hold'em (Diamond)
            [play_date_int] => 1450659600
            [play_date_str] => 2015-12-21T10:00:00
            [game_play_count] => -1
            [bet_amount] => 414000
            [payout_amount] => 52000
            [win_amount] => -362000
            [distribute_type] => NON_SLOTS
            [distribute_rate] => 0.011
            [acc_comp_point] => 4554
            [reg_date] => 1450674005
        )

)

ERROR - 2015-12-21 14:00:05 --> key ====> MXMGSSS6195842
ERROR - 2015-12-21 14:00:05 --> 변환 -------   SSS6195842
ERROR - 2015-12-21 14:00:05 --> Array
(
    [MXMGSSS6195842] => Array
        (
            [total_acc_comp_point] => 10454
            [user_no] => 690
            [user_id] => SSS6195842
        )

)

ERROR - 2015-12-21 14:00:05 --> arr_length ------> 1
ERROR - 2015-12-21 14:00:05 --> tmp_amount ------------------>10454
ERROR - 2015-12-21 14:00:05 --> tmp_comp ------------------>10454
ERROR - 2015-12-21 14:00:05 --> comp point update batch query
ERROR - 2015-12-21 14:00:05 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 690 THEN comp_point + 10454 ELSE comp_point END WHERE user_no in (690)
ERROR - 2015-12-21 14:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-21 14:00:05 --> MG Game play update result
ERROR - 2015-12-21 14:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450652400
    [update_end_time] => 1450659600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 2
    [complete_time] => 1450674005
    [reg_date] => 1450674005
)

ERROR - 2015-12-21 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-21 17:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-21T11:00:00
            [end_time] => 2015-12-21T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-21 11:00:00
            [end_time] => 2015-12-21 14:00:00
        )

)

ERROR - 2015-12-21 17:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-21 17:00:01 --> MG start_date ===> 2015-12-21T11:00:00
ERROR - 2015-12-21 17:00:01 --> MG end_date ===> 2015-12-21T11:00:00
ERROR - 2015-12-21 17:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 46e3d067-968b-4e48-9a17-1c26b91daeda
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 17:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 04a8fac4-0418-4aec-9187-ac9172a2a160
        )

)

ERROR - 2015-12-21 17:00:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 04a8fac4-0418-4aec-9187-ac9172a2a160
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-21 17:00:04 --> Response Code  : NotInCache
ERROR - 2015-12-21 17:00:08 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => e71a2ac4-02b9-4bca-a4fe-f0a72934d182
        )

)

ERROR - 2015-12-21 17:00:12 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => e71a2ac4-02b9-4bca-a4fe-f0a72934d182
        )

)

ERROR - 2015-12-21 17:00:12 --> Response Code  : Normal
ERROR - 2015-12-21 17:00:12 --> cur_page
ERROR - 2015-12-21 17:00:12 --> 2
ERROR - 2015-12-21 17:00:12 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-21 17:00:12 --> MG Game play update result
ERROR - 2015-12-21 17:00:12 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450663200
    [update_end_time] => 1450670400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450684812
    [reg_date] => 1450684812
)

ERROR - 2015-12-21 17:36:42 --> 404 Page Not Found: Faviconico/index
ERROR - 2015-12-21 17:36:56 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 46e3d067-968b-4e48-9a17-1c26b91daeda
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 17:36:57 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => BFMGWORLDLY9999
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => BFMGWORLDLY9999
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T08:36:57
            [EMail] => 
            [CreditBalance] => 36.95
            [Balance] => 36950
            [ProfileId] => 253
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 17:36:58 --> PT_request info
ERROR - 2015-12-21 17:36:58 --> https://kioskpublicapi.redhorse88.com/player/info/playername/BFPTWORLDLY9999/with3RDPData/1
ERROR - 2015-12-21 17:36:58 --> {"result":{"ADDRESS":"NA","ADVERTISER":"default71","BALANCE":"0","BANNERID":"-","BIRTHDATE":"1950-01-01","BONUSBALANCE":"0","CASINONAME":"luckystar88","CASINONICKNAME":false,"CELLPHONE":null,"CITY":"NA","CLIENTSKIN":"luckystar88","CLIENTTYPE":"casino","CODE":"17894670","COMMENTS":"Created through Public API. ","COMPPOINTS":"0","COUNTRYCODE":"CN","CREFERER":[],"CURRENCY":"CNY","CURRENCYCODE":"CNY","CURRENTBET":"0","CURRENTBONUSBET":"0","CUSTOM01":"GLOBAL","EMAIL":"bfptworldly9999@bigchina.com","FAX":"11111","FIRSTNAME":"NA","FROZEN":"0","INTERNAL":"0","ISINGAME":false,"KIOSKADMINNAME":"bigchina","KIOSKNAME":"BAOFA88","LANGUAGECODE":"EN","LASTDEPOSITDATE":null,"LASTLOGINDATE":false,"LASTNAME":"NA","LASTWITHDRAWALDATE":null,"LOCKEDMINUTES":0,"MAXBALANCE":"0","NETLOSS":null,"NETWORKNICKNAMES":[],"NOBONUS":"0","OCCUPATION":null,"PASSWORD":"62EB339D710466A45E67877B9AE83A5CEF554C4B","PENDINGBONUSBALANCE":"0","PHONE":"11111","PLAYERNAME":"BFPTWORLDLY9999","RC_BALANCE":0,"RESERVEDBALANCE":"0","SERIAL":"71W20CARDUSER1449751123","SEX":null,"SIGNUPCLIENTPLATFORM":"download","SIGNUPDATE":"2015-12-10 20:38:43","STATE":"NA","SUSPENDED":0,"TITLE":null,"TOTALCOMPPOINTS":"0","TOTALDEPOSITS":null,"TOTALWITHDRAWALS":null,"TRACKINGID":false,"VIPLEVEL":"1","WANTMAIL":1,"WORKPHONE":null,"ZIP":"NA","3RDPData":"No data found"}}
ERROR - 2015-12-21 17:36:58 --> Severity: Notice --> Trying to get property of non-object /www/game_offline/application/controllers/Member.php 384
ERROR - 2015-12-21 17:43:48 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 46e3d067-968b-4e48-9a17-1c26b91daeda
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 17:43:48 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => MXMGSSS6195842
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => MXMGSSS6195842
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T08:43:49
            [EMail] => 
            [CreditBalance] => 245.25
            [Balance] => 245250
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 17:43:49 --> PT_request info
ERROR - 2015-12-21 17:43:49 --> https://kioskpublicapi.redhorse88.com/player/info/playername/MXPTSSS6195842/with3RDPData/1
ERROR - 2015-12-21 17:43:49 --> {"result":{"ADDRESS":"NA","ADVERTISER":"default71","BALANCE":"0","BANNERID":"-","BIRTHDATE":"1950-01-01","BONUSBALANCE":"0","CASINONAME":"luckystar88","CASINONICKNAME":false,"CELLPHONE":null,"CITY":"NA","CLIENTSKIN":"luckystar88","CLIENTTYPE":"casino","CODE":"18153434","COMMENTS":"Created through Public API. ","COMPPOINTS":"0","COUNTRYCODE":"CN","CREFERER":[],"CURRENCY":"CNY","CURRENCYCODE":"CNY","CURRENTBET":"0","CURRENTBONUSBET":"0","CUSTOM01":"GLOBAL","EMAIL":"mxptsss6195842@bigchina.com","FAX":"11111","FIRSTNAME":"NA","FROZEN":"0","INTERNAL":"0","ISINGAME":false,"KIOSKADMINNAME":"bigchina","KIOSKNAME":"BAOFA88","LANGUAGECODE":"EN","LASTDEPOSITDATE":null,"LASTLOGINDATE":false,"LASTNAME":"NA","LASTWITHDRAWALDATE":null,"LOCKEDMINUTES":0,"MAXBALANCE":"0","NETLOSS":null,"NETWORKNICKNAMES":[],"NOBONUS":"0","OCCUPATION":null,"PASSWORD":"E20850D4780EC79D52DBFE402F696D85453DDDE2","PENDINGBONUSBALANCE":"0","PHONE":"11111","PLAYERNAME":"MXPTSSS6195842","RC_BALANCE":0,"RESERVEDBALANCE":"0","SERIAL":"71W20CARDUSER1450614156","SEX":null,"SIGNUPCLIENTPLATFORM":"download","SIGNUPDATE":"2015-12-20 20:22:35","STATE":"NA","SUSPENDED":0,"TITLE":null,"TOTALCOMPPOINTS":"0","TOTALDEPOSITS":null,"TOTALWITHDRAWALS":null,"TRACKINGID":false,"VIPLEVEL":"1","WANTMAIL":1,"WORKPHONE":null,"ZIP":"NA","3RDPData":"No data found"}}
ERROR - 2015-12-21 17:43:49 --> Severity: Notice --> Trying to get property of non-object /www/game_offline/application/controllers/Member.php 384
ERROR - 2015-12-21 17:45:41 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 46e3d067-968b-4e48-9a17-1c26b91daeda
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 17:45:41 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => MXMGSSS6195842
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => MXMGSSS6195842
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T08:45:41
            [EMail] => 
            [CreditBalance] => 195.25
            [Balance] => 195250
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 18:09:48 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 46e3d067-968b-4e48-9a17-1c26b91daeda
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 18:09:48 --> MG Request GetAccountDetails ===> stdClass Object
(
    [GetAccountDetailsResult] => stdClass Object
        (
            [ErrorMessage] => 
            [IsSucceed] => 1
            [ErrorCode] => 0
            [ErrorId] => 
            [AccountNumber] => MXMGSSS6195842
            [FirstName] => OnCash
            [LastName] => Station
            [NickName] => MXMGSSS6195842
            [PokerAlias] => 
            [MobileNumber] => 
            [RelatedProduct] => Casino
            [AccountStatus] => Open
            [SuspendAccountStatus] => Open
            [LastEditDate] => 2015-12-21T09:09:48
            [EMail] => 
            [CreditBalance] => 0.25
            [Balance] => 250
            [ProfileId] => 234
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2015-12-21 19:13:54 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => fe66b106-0388-462a-a650-d1fb1de22d48
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 19:13:55 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=ko
)

ERROR - 2015-12-21 19:13:55 --> MG_play_check_url
ERROR - 2015-12-21 19:13:55 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=ko
ERROR - 2015-12-21 19:14:19 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => fe66b106-0388-462a-a650-d1fb1de22d48
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 19:14:20 --> MG Request GetPlaycheckUrl ===> stdClass Object
(
    [GetPlaycheckUrlResult] => https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=ko
)

ERROR - 2015-12-21 19:14:20 --> MG_play_check_url
ERROR - 2015-12-21 19:14:20 --> https://playcheck22.gameassists.co.uk/playcheck/default.aspx?serverid=2635&username=MXMGSSS6195842&password=zfA2RmoaPd&ul=ko
ERROR - 2015-12-21 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-21 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-21T14:00:00
            [end_time] => 2015-12-21T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-21 14:00:00
            [end_time] => 2015-12-21 17:00:00
        )

)

ERROR - 2015-12-21 20:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-21 20:00:01 --> MG start_date ===> 2015-12-21T14:00:00
ERROR - 2015-12-21 20:00:01 --> MG end_date ===> 2015-12-21T14:00:00
ERROR - 2015-12-21 20:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => fe66b106-0388-462a-a650-d1fb1de22d48
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 20:00:05 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 39e07ed9-86cf-4b1c-8af7-51783473195e
        )

)

ERROR - 2015-12-21 20:00:06 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 39e07ed9-86cf-4b1c-8af7-51783473195e
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-21 20:00:06 --> Response Code  : NotInCache
ERROR - 2015-12-21 20:00:10 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => edd16b73-bddd-4afb-a4dd-013765dd3806
        )

)

ERROR - 2015-12-21 20:00:10 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => edd16b73-bddd-4afb-a4dd-013765dd3806
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-21 20:00:10 --> Response Code  : NotInCache
ERROR - 2015-12-21 20:00:12 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 514fc1c2-9f53-4fd3-a83b-b580c0e12ad9
        )

)

ERROR - 2015-12-21 20:00:13 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 514fc1c2-9f53-4fd3-a83b-b580c0e12ad9
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-21 20:00:13 --> Response Code  : NotInCache
ERROR - 2015-12-21 20:00:14 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 98d0e81f-007c-42a4-ad04-96560f1cfe8d
        )

)

ERROR - 2015-12-21 20:00:14 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => 98d0e81f-007c-42a4-ad04-96560f1cfe8d
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-21 20:00:14 --> Response Code  : NotInCache
ERROR - 2015-12-21 20:00:17 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => ae612ad5-4beb-4664-ac37-6f9d10d6a61a
        )

)

ERROR - 2015-12-21 20:00:17 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => ae612ad5-4beb-4664-ac37-6f9d10d6a61a
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-21 20:00:17 --> Response Code  : NotInCache
ERROR - 2015-12-21 20:00:19 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => b9a4d7b5-0ea6-4496-8f0b-bdb3b2065b0e
        )

)

ERROR - 2015-12-21 20:00:19 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => NotInCache
            [ErrorValue] => SUCCESS
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 0
                    [PageNumber] => 0
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [Status] => Error
            [Id] => b9a4d7b5-0ea6-4496-8f0b-bdb3b2065b0e
            [Description] => Save time of report is expired.
        )

)

ERROR - 2015-12-21 20:00:19 --> Response Code  : NotInCache
ERROR - 2015-12-21 20:00:21 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => c17c27e6-37b7-443d-825f-ec68a3863a25
        )

)

ERROR - 2015-12-21 20:00:22 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 0
                    [TotalRow] => 0
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"/>
                )

            [Status] => Complete
            [Id] => c17c27e6-37b7-443d-825f-ec68a3863a25
        )

)

ERROR - 2015-12-21 20:00:22 --> Response Code  : Normal
ERROR - 2015-12-21 20:00:22 --> cur_page
ERROR - 2015-12-21 20:00:22 --> 2
ERROR - 2015-12-21 20:00:22 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-21 20:00:22 --> MG Game play update result
ERROR - 2015-12-21 20:00:22 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450674000
    [update_end_time] => 1450681200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1450695622
    [reg_date] => 1450695622
)

ERROR - 2015-12-21 23:00:01 --> [CRON2] 에이젼트 정산 작업의 배치를 시작합니다. ===========================================================>
ERROR - 2015-12-21 23:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2015-12-21 23:00:01 --> Severity: Notice --> Undefined variable: option /www/game_offline/application/controllers/batch/Batch_process.php 191
ERROR - 2015-12-21 23:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2015-12-21T17:00:00
            [end_time] => 2015-12-21T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2015-12-21 17:00:00
            [end_time] => 2015-12-21 20:00:00
        )

)

ERROR - 2015-12-21 23:00:01 --> 정산시간 ======>  
ERROR - 2015-12-21 23:00:01 --> Severity: Notice --> Undefined variable: agent_settle /www/game_offline/application/libraries/Affiliate_service.php 453
ERROR - 2015-12-21 23:00:01 --> Severity: Warning --> Invalid argument supplied for foreach() /www/game_offline/application/libraries/Affiliate_service.php 453
ERROR - 2015-12-21 23:00:01 --> Severity: Notice --> Undefined variable: deps1_apply_level /www/game_offline/application/libraries/Affiliate_service.php 476
ERROR - 2015-12-21 23:00:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /www/game_offline/application/controllers/batch/Batch_process.php:167) /www/game_offline/system/core/Common.php 566
ERROR - 2015-12-21 23:00:01 --> Severity: Error --> Cannot access empty property /www/game_offline/application/libraries/Affiliate_service.php 476
ERROR - 2015-12-21 23:00:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2015-12-21 23:00:02 --> MG start_date ===> 2015-12-21T17:00:00
ERROR - 2015-12-21 23:00:02 --> MG end_date ===> 2015-12-21T17:00:00
ERROR - 2015-12-21 23:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => d9d75374-5421-40a2-bf90-c24fa7ea1274
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2015-12-21 23:00:04 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => e3aa4cb5-e587-4ca2-8364-ec8ee36ed523
        )

)

ERROR - 2015-12-21 23:00:04 --> MG Request GetReportResult ===> stdClass Object
(
    [GetReportResultResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [ReportName] => PlayerGamePlayReport
            [Paging] => stdClass Object
                (
                    [RowsPerPage] => 100
                    [PageNumber] => 1
                    [TotalPage] => 1
                    [TotalRow] => 2
                    [RowsInCurrentPage] => 0
                )

            [CurrentPageData] => stdClass Object
                (
                    [schema] => <xs:schema xmlns="" xmlns:xs="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" id="NewDataSet"><xs:element name="NewDataSet" msdata:IsDataSet="true" msdata:UseCurrentLocale="true"><xs:complexType><xs:choice minOccurs="0" maxOccurs="unbounded"><xs:element name="Table"><xs:complexType><xs:sequence><xs:element name="Date" msdata:DateTimeMode="Unspecified" type="xs:dateTime" minOccurs="0"/><xs:element name="Label_Player" type="xs:string" minOccurs="0"/><xs:element name="Currency" type="xs:string" minOccurs="0"/><xs:element name="GameName" type="xs:string" minOccurs="0"/><xs:element name="GameCategory" type="xs:string" minOccurs="0"/><xs:element name="Platforms" type="xs:string" minOccurs="0"/><xs:element name="ProductId" type="xs:int" minOccurs="0"/><xs:element name="BetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="PayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="GrossWin" type="xs:decimal" minOccurs="0"/><xs:element name="NumBets" type="xs:int" minOccurs="0"/><xs:element name="PayoutCount" type="xs:int" minOccurs="0"/><xs:element name="MaxBet" type="xs:decimal" minOccurs="0"/><xs:element name="MaxPayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AveragePayoutAmount" type="xs:decimal" minOccurs="0"/><xs:element name="AverageBetAmount" type="xs:decimal" minOccurs="0"/><xs:element name="ProgressiveWagerAmount" type="xs:decimal" minOccurs="0"/></xs:sequence></xs:complexType></xs:element></xs:choice></xs:complexType></xs:element></xs:schema>
                    [any] => <diffgr:diffgram xmlns:msdata="urn:schemas-microsoft-com:xml-msdata" xmlns:diffgr="urn:schemas-microsoft-com:xml-diffgram-v1"><NewDataSet xmlns=""><Table diffgr:id="Table1" msdata:rowOrder="0"><Date>2015-12-21T17:00:00</Date><Label_Player>MXMGSSS6195842</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond) - Playboy</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>245000.0000</BetAmount><PayoutAmount>195000.0000</PayoutAmount><GrossWin>50000.0000</GrossWin><NumBets>2</NumBets><PayoutCount>1</PayoutCount><MaxBet>195000.0000</MaxBet><MaxPayoutAmount>195000.0000</MaxPayoutAmount><AveragePayoutAmount>195000.0000</AveragePayoutAmount><AverageBetAmount>122500.0000</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table><Table diffgr:id="Table2" msdata:rowOrder="1"><Date>2015-12-21T18:00:00</Date><Label_Player>MXMGSSS6195842</Label_Player><Currency>KRW</Currency><GameName>Baccarat (Diamond) - Playboy</GameName><GameCategory>Diamond LG Baccarat</GameCategory><Platforms>Live Games</Platforms><ProductId>1</ProductId><BetAmount>295000.0000</BetAmount><PayoutAmount>100000.0000</PayoutAmount><GrossWin>195000.0000</GrossWin><NumBets>3</NumBets><PayoutCount>1</PayoutCount><MaxBet>100000.0000</MaxBet><MaxPayoutAmount>100000.0000</MaxPayoutAmount><AveragePayoutAmount>100000.0000</AveragePayoutAmount><AverageBetAmount>98333.3333</AverageBetAmount><ProgressiveWagerAmount>0.0000</ProgressiveWagerAmount></Table></NewDataSet></diffgr:diffgram>
                )

            [Status] => Complete
            [Id] => e3aa4cb5-e587-4ca2-8364-ec8ee36ed523
        )

)

ERROR - 2015-12-21 23:00:04 --> Response Code  : Normal
ERROR - 2015-12-21 23:00:04 --> cur_page
ERROR - 2015-12-21 23:00:04 --> 2
ERROR - 2015-12-21 23:00:04 --> MG Game fetch .....11111
ERROR - 2015-12-21 23:00:04 --> Array
(
    [0] => Array
        (
            [player_name] => MXMGSSS6195842
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond) - Playboy
            [play_date_int] => 1450684800
            [play_date_str] => 2015-12-21T17:00:00
            [game_play_count] => -1
            [bet_amount] => 245000
            [payout_amount] => 195000
            [win_amount] => -50000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 2450
            [reg_date] => 1450706404
        )

    [1] => Array
        (
            [player_name] => MXMGSSS6195842
            [vender_code] => 2
            [game_type] => Diamond LG Baccarat
            [game_name] => Baccarat (Diamond) - Playboy
            [play_date_int] => 1450688400
            [play_date_str] => 2015-12-21T18:00:00
            [game_play_count] => -1
            [bet_amount] => 295000
            [payout_amount] => 100000
            [win_amount] => -195000
            [distribute_type] => LIVE
            [distribute_rate] => 0.01
            [acc_comp_point] => 2950
            [reg_date] => 1450706404
        )

)

ERROR - 2015-12-21 23:00:04 --> key ====> MXMGSSS6195842
ERROR - 2015-12-21 23:00:04 --> 변환 -------   SSS6195842
ERROR - 2015-12-21 23:00:04 --> Array
(
    [MXMGSSS6195842] => Array
        (
            [total_acc_comp_point] => 5400
            [user_no] => 690
            [user_id] => SSS6195842
        )

)

ERROR - 2015-12-21 23:00:04 --> arr_length ------> 1
ERROR - 2015-12-21 23:00:04 --> tmp_amount ------------------>5400
ERROR - 2015-12-21 23:00:04 --> tmp_comp ------------------>5400
ERROR - 2015-12-21 23:00:04 --> comp point update batch query
ERROR - 2015-12-21 23:00:04 --> UPDATE wallet SET comp_point = CASE WHEN user_no = 690 THEN comp_point + 5400 ELSE comp_point END WHERE user_no in (690)
ERROR - 2015-12-21 23:00:04 --> Game_play_service:: MG_FETCH  finished
ERROR - 2015-12-21 23:00:04 --> MG Game play update result
ERROR - 2015-12-21 23:00:04 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1450684800
    [update_end_time] => 1450692000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 2
    [complete_time] => 1450706404
    [reg_date] => 1450706404
)

