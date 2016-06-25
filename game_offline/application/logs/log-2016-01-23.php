<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-01-23 01:03:46 --> 404 Page Not Found: Faviconico/index
ERROR - 2016-01-23 01:04:15 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => c9aa9f3d-477e-4ae7-8ec2-3354489edb9e
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-23 01:04:17 --> MG Request GetAccountDetails ===> stdClass Object
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
            [LastEditDate] => 2016-01-22T16:04:16
            [EMail] => 
            [CreditBalance] => 36.95
            [Balance] => 36950
            [ProfileId] => 253
            [RngBettingProfileId] => 0
            [RngBettingProfileStatus] => 
        )

)

ERROR - 2016-01-23 01:04:18 --> PT_request info
ERROR - 2016-01-23 01:04:18 --> https://kioskpublicapi.redhorse88.com/player/info/playername/BFPTWORLDLY9999/with3RDPData/1
ERROR - 2016-01-23 01:04:18 --> {"result":{"ADDRESS":"NA","ADVERTISER":"default71","BALANCE":"0","BANNERID":"-","BIRTHDATE":"1950-01-01","BONUSBALANCE":"0","CASINONAME":"luckystar88","CASINONICKNAME":null,"CELLPHONE":null,"CITY":"NA","CLIENTSKIN":"luckystar88","CLIENTTYPE":"casino","CODE":"17894670","COMMENTS":"Created through Public API. ","COMPPOINTS":"0","COUNTRYCODE":"CN","CREFERER":[],"CURRENCY":"CNY","CURRENCYCODE":"CNY","CURRENTBET":"0","CURRENTBONUSBET":"0","CUSTOM01":"GLOBAL","EMAIL":"bfptworldly9999@bigchina.com","FAX":"11111","FIRSTNAME":"NA","FROZEN":"0","INTERNAL":"0","ISINGAME":false,"KIOSKADMINNAME":"bigchina","KIOSKNAME":"BAOFA88","LANGUAGECODE":"EN","LASTDEPOSITDATE":null,"LASTLOGINDATE":false,"LASTNAME":"NA","LASTWITHDRAWALDATE":null,"LOCKEDMINUTES":0,"MAXBALANCE":"0","NETLOSS":null,"NETWORKNICKNAMES":[],"NOBONUS":"0","OCCUPATION":null,"PASSWORD":"62EB339D710466A45E67877B9AE83A5CEF554C4B","PENDINGBONUSBALANCE":"0","PHONE":"11111","PLAYERNAME":"BFPTWORLDLY9999","RC_BALANCE":0,"RESERVEDBALANCE":"0","SERIAL":"71W20CARDUSER1449751123","SEX":null,"SIGNUPCLIENTPLATFORM":"download","SIGNUPDATE":"2015-12-10 20:38:43","STATE":"NA","SUSPENDED":0,"TITLE":null,"TOTALCOMPPOINTS":"0","TOTALDEPOSITS":null,"TOTALWITHDRAWALS":null,"TRACKINGID":false,"VIPLEVEL":"1","WANTMAIL":1,"WORKPHONE":null,"ZIP":"NA","3RDPData":"No data found"}}
ERROR - 2016-01-23 01:04:18 --> Severity: Notice --> Trying to get property of non-object /www/game_offline/application/controllers/Member.php 384
ERROR - 2016-01-23 02:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-23 02:00:02 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-22T20:00:00
            [end_time] => 2016-01-22T22:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-22 20:00:00
            [end_time] => 2016-01-22 23:00:00
        )

)

ERROR - 2016-01-23 02:00:02 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-23 02:00:02 --> MG start_date ===> 2016-01-22T20:00:00
ERROR - 2016-01-23 02:00:02 --> MG end_date ===> 2016-01-22T20:00:00
ERROR - 2016-01-23 02:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => c9aa9f3d-477e-4ae7-8ec2-3354489edb9e
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-23 02:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f13b1546-485f-4fab-8c99-0966aa83e79d
        )

)

ERROR - 2016-01-23 02:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => f13b1546-485f-4fab-8c99-0966aa83e79d
        )

)

ERROR - 2016-01-23 02:00:03 --> Response Code  : Normal
ERROR - 2016-01-23 02:00:03 --> cur_page
ERROR - 2016-01-23 02:00:03 --> 2
ERROR - 2016-01-23 02:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-23 02:00:03 --> MG Game play update result
ERROR - 2016-01-23 02:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453460400
    [update_end_time] => 1453467600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453482003
    [reg_date] => 1453482003
)

ERROR - 2016-01-23 05:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-23 05:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-22T23:00:00
            [end_time] => 2016-01-23T01:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-22 23:00:00
            [end_time] => 2016-01-23 02:00:00
        )

)

ERROR - 2016-01-23 05:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-23 05:00:01 --> MG start_date ===> 2016-01-22T23:00:00
ERROR - 2016-01-23 05:00:01 --> MG end_date ===> 2016-01-22T23:00:00
ERROR - 2016-01-23 05:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => e59c647b-8461-4a52-97cf-167194a6c55c
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-23 05:00:01 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 86daee2b-6ad2-4ab4-97d9-b9255fa46a3b
        )

)

ERROR - 2016-01-23 05:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 86daee2b-6ad2-4ab4-97d9-b9255fa46a3b
        )

)

ERROR - 2016-01-23 05:00:03 --> Response Code  : Normal
ERROR - 2016-01-23 05:00:03 --> cur_page
ERROR - 2016-01-23 05:00:03 --> 2
ERROR - 2016-01-23 05:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-23 05:00:03 --> MG Game play update result
ERROR - 2016-01-23 05:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453471200
    [update_end_time] => 1453478400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453492803
    [reg_date] => 1453492803
)

ERROR - 2016-01-23 08:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-23 08:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-23T02:00:00
            [end_time] => 2016-01-23T04:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-23 02:00:00
            [end_time] => 2016-01-23 05:00:00
        )

)

ERROR - 2016-01-23 08:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-23 08:00:01 --> MG start_date ===> 2016-01-23T02:00:00
ERROR - 2016-01-23 08:00:01 --> MG end_date ===> 2016-01-23T02:00:00
ERROR - 2016-01-23 08:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 2705edfe-9229-416a-9f99-762939c4461d
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-23 08:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => e7ac4464-ef9c-42d3-a3b0-f5319252f10c
        )

)

ERROR - 2016-01-23 08:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => e7ac4464-ef9c-42d3-a3b0-f5319252f10c
        )

)

ERROR - 2016-01-23 08:00:03 --> Response Code  : Normal
ERROR - 2016-01-23 08:00:03 --> cur_page
ERROR - 2016-01-23 08:00:03 --> 2
ERROR - 2016-01-23 08:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-23 08:00:03 --> MG Game play update result
ERROR - 2016-01-23 08:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453482000
    [update_end_time] => 1453489200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453503603
    [reg_date] => 1453503603
)

ERROR - 2016-01-23 11:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-23 11:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-23T05:00:00
            [end_time] => 2016-01-23T07:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-23 05:00:00
            [end_time] => 2016-01-23 08:00:00
        )

)

ERROR - 2016-01-23 11:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-23 11:00:01 --> MG start_date ===> 2016-01-23T05:00:00
ERROR - 2016-01-23 11:00:01 --> MG end_date ===> 2016-01-23T05:00:00
ERROR - 2016-01-23 11:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => a08ed869-a566-4e0d-adb9-8b6b409ac296
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-23 11:00:01 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f468aa07-40d5-48a4-9dd6-d5b81793f4f4
        )

)

ERROR - 2016-01-23 11:00:02 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => f468aa07-40d5-48a4-9dd6-d5b81793f4f4
        )

)

ERROR - 2016-01-23 11:00:02 --> Response Code  : Normal
ERROR - 2016-01-23 11:00:02 --> cur_page
ERROR - 2016-01-23 11:00:02 --> 2
ERROR - 2016-01-23 11:00:02 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-23 11:00:02 --> MG Game play update result
ERROR - 2016-01-23 11:00:02 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453492800
    [update_end_time] => 1453500000
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453514402
    [reg_date] => 1453514402
)

ERROR - 2016-01-23 14:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-23 14:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-23T08:00:00
            [end_time] => 2016-01-23T10:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-23 08:00:00
            [end_time] => 2016-01-23 11:00:00
        )

)

ERROR - 2016-01-23 14:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-23 14:00:01 --> MG start_date ===> 2016-01-23T08:00:00
ERROR - 2016-01-23 14:00:01 --> MG end_date ===> 2016-01-23T08:00:00
ERROR - 2016-01-23 14:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => caee75ef-4d01-4ad5-b778-e8766dec0b83
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-23 14:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => d790e64c-41dc-4599-8966-eaf8735af2c2
        )

)

ERROR - 2016-01-23 14:00:05 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => d790e64c-41dc-4599-8966-eaf8735af2c2
        )

)

ERROR - 2016-01-23 14:00:05 --> Response Code  : Normal
ERROR - 2016-01-23 14:00:05 --> cur_page
ERROR - 2016-01-23 14:00:05 --> 2
ERROR - 2016-01-23 14:00:05 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-23 14:00:05 --> MG Game play update result
ERROR - 2016-01-23 14:00:05 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453503600
    [update_end_time] => 1453510800
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453525205
    [reg_date] => 1453525205
)

ERROR - 2016-01-23 17:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-23 17:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-23T11:00:00
            [end_time] => 2016-01-23T13:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-23 11:00:00
            [end_time] => 2016-01-23 14:00:00
        )

)

ERROR - 2016-01-23 17:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-23 17:00:01 --> MG start_date ===> 2016-01-23T11:00:00
ERROR - 2016-01-23 17:00:01 --> MG end_date ===> 2016-01-23T11:00:00
ERROR - 2016-01-23 17:00:01 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => c46ef2c4-3d8b-499d-89a5-9a678f734976
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-23 17:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => e03204d5-072e-4290-a9a1-8f8874900a76
        )

)

ERROR - 2016-01-23 17:00:02 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => e03204d5-072e-4290-a9a1-8f8874900a76
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-23 17:00:02 --> Response Code  : NotInCache
ERROR - 2016-01-23 17:00:06 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 776ceeaf-bffe-49c2-a4a0-9c5f6bfc5219
        )

)

ERROR - 2016-01-23 17:00:07 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 776ceeaf-bffe-49c2-a4a0-9c5f6bfc5219
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-23 17:00:07 --> Response Code  : NotInCache
ERROR - 2016-01-23 17:00:09 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => f3178f0c-0997-4a79-86ff-3d34d9df99e4
        )

)

ERROR - 2016-01-23 17:00:15 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => f3178f0c-0997-4a79-86ff-3d34d9df99e4
        )

)

ERROR - 2016-01-23 17:00:15 --> Response Code  : Normal
ERROR - 2016-01-23 17:00:15 --> cur_page
ERROR - 2016-01-23 17:00:15 --> 2
ERROR - 2016-01-23 17:00:15 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-23 17:00:15 --> MG Game play update result
ERROR - 2016-01-23 17:00:15 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453514400
    [update_end_time] => 1453521600
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453536015
    [reg_date] => 1453536015
)

ERROR - 2016-01-23 20:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-23 20:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-23T14:00:00
            [end_time] => 2016-01-23T16:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-23 14:00:00
            [end_time] => 2016-01-23 17:00:00
        )

)

ERROR - 2016-01-23 20:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-23 20:00:01 --> MG start_date ===> 2016-01-23T14:00:00
ERROR - 2016-01-23 20:00:01 --> MG end_date ===> 2016-01-23T14:00:00
ERROR - 2016-01-23 20:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 2f24e039-89da-4f3c-8a7a-4f3cbd751e3e
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-23 20:00:03 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 5234e668-402d-4e63-ba35-9721a6b0b1ea
        )

)

ERROR - 2016-01-23 20:00:04 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 5234e668-402d-4e63-ba35-9721a6b0b1ea
            [Description] => Save time of report is expired.
        )

)

ERROR - 2016-01-23 20:00:04 --> Response Code  : NotInCache
ERROR - 2016-01-23 20:00:07 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 38305206-9eb4-45d1-b28e-fa484bfb766b
        )

)

ERROR - 2016-01-23 20:00:08 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 38305206-9eb4-45d1-b28e-fa484bfb766b
        )

)

ERROR - 2016-01-23 20:00:08 --> Response Code  : Normal
ERROR - 2016-01-23 20:00:08 --> cur_page
ERROR - 2016-01-23 20:00:08 --> 2
ERROR - 2016-01-23 20:00:08 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-23 20:00:08 --> MG Game play update result
ERROR - 2016-01-23 20:00:08 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453525200
    [update_end_time] => 1453532400
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453546808
    [reg_date] => 1453546808
)

ERROR - 2016-01-23 23:00:01 --> [CRON1] 게임 플레이 내역의 업데이트를 시작합니다. ===========================================================>
ERROR - 2016-01-23 23:00:01 --> 게임플레이 업데이트 기간 ======>=======   Array
(
    [mg] => Array
        (
            [start_time] => 2016-01-23T17:00:00
            [end_time] => 2016-01-23T19:00:00
        )

    [pt] => Array
        (
            [start_time] => 2016-01-23 17:00:00
            [end_time] => 2016-01-23 20:00:00
        )

)

ERROR - 2016-01-23 23:00:01 --> Game_play_service:: MG_FETCH  porcessing .........
ERROR - 2016-01-23 23:00:01 --> MG start_date ===> 2016-01-23T17:00:00
ERROR - 2016-01-23 23:00:01 --> MG end_date ===> 2016-01-23T17:00:00
ERROR - 2016-01-23 23:00:02 --> MG Request IsAuthenticate ===> stdClass Object
(
    [IsAuthenticateResult] => stdClass Object
        (
            [SessionGUID] => 6df0210b-fa90-4991-a609-2363860c57ee
            [ErrorCode] => 0
            [IPAddress] => 52.69.174.246
            [IsExtendSession] => 1
            [IsSucceed] => 1
        )

)

ERROR - 2016-01-23 23:00:02 --> MG Request GetReportByName ===> stdClass Object
(
    [GetReportByNameResult] => stdClass Object
        (
            [IsSucceed] => 1
            [ErrorCode] => 0
            [SourceStatus] => Normal
            [ErrorValue] => SUCCESS
            [Status] => Pending
            [Id] => 0896bf21-bc09-43df-9e35-ea475b3c3ae1
        )

)

ERROR - 2016-01-23 23:00:03 --> MG Request GetReportResult ===> stdClass Object
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
            [Id] => 0896bf21-bc09-43df-9e35-ea475b3c3ae1
        )

)

ERROR - 2016-01-23 23:00:03 --> Response Code  : Normal
ERROR - 2016-01-23 23:00:03 --> cur_page
ERROR - 2016-01-23 23:00:03 --> 2
ERROR - 2016-01-23 23:00:03 --> Game_play_service:: MG_FETCH  finished
ERROR - 2016-01-23 23:00:03 --> MG Game play update result
ERROR - 2016-01-23 23:00:03 --> Array
(
    [game_vender] => 2
    [game_vender_name] => MG
    [update_start_time] => 1453536000
    [update_end_time] => 1453543200
    [update_status] => Y
    [auto_attempt_count] => 1
    [manual_attempt_count] => 0
    [message] => success
    [update_row_count] => 0
    [complete_time] => 1453557603
    [reg_date] => 1453557603
)

