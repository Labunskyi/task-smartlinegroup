<?php
$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<Ticket No="057-6776453695" Status="Issued" Type="Electron" SignInBooking="097956" SignInTicketing="54" ReissueNo="" XP="">
      <TicketHeader>
        <History Ticketing="2015-03-26" Void="" Refund="" Reissue=""/>
        <Created>2015-03-26 10:22:00</Created>
        <Modified/>
        <ModifiedBy/>
        <ClientCompanyName/>
        <ClientNumber/>
        <DistrubutorName/>
        <DistributorNumber/>
        <RecordLocator>4LTHC0</RecordLocator>
        <Subagent/>
        <Interline>N</Interline>
        <TicketStatus>OK</TicketStatus>
        <TKTcoupons/>
        <GlobalCouponStatus/>
        <TermID>BC8A62</TermID>
        <MIRdev>ADB08B</MIRdev>
        <TransBeforeTKT>008</TransBeforeTKT>
        <AutoPrice>N</AutoPrice>
        <BookedDirectly>N</BookedDirectly>
        <FrequentFlyer/>
        <FareCalc>IEV AF X/PAR AF X/MAD AF PMI 81.44AF X/MAD AF X/PAR AF IEV 82 .94 NUC164.38END ROE1.0 XT 404YK644FR733QX747JD46OG219QV2736Y R</FareCalc>
        <Routing>KBP-CDG-MAD-PMI-MAD-CDG-KBP</Routing>
        <ItineraryIndicator>I</ItineraryIndicator>
        <PNRCreationDate>2015-03-26</PNRCreationDate>
        <OfficeID Booking="7E53" TR="" Ticketing="7E53"/>
        <Contacts>KBPT*380445857777</Contacts>
        <TktAgentTitle/>
        <TktOfficeTitle>7E53</TktOfficeTitle>
        <BookingOfficeTitle>7E53</BookingOfficeTitle>
        <IATA>72324464</IATA>
        <ValidAirlineName>AIR FRANCE</ValidAirlineName>
        <ValidatingCarrier>AF</ValidatingCarrier>
        <Rate Currency="USD" Value="164.00"/>
        <RateUAH>3895.00</RateUAH>
        <ConvertationRate>23.7500</ConvertationRate>
        <TourCode/>
        <Comission>1.00A</Comission>
        <CommisAmt Curr="UAH" Value="1.00"/>
        <FP>CASH</FP>
        <CreditCard/>
        <AirRecLoc>1A-3KU6O7</AirRecLoc>
        <Endorsement>REFUND/CHANGE /RESTRICTIONS APPLY </Endorsement>
        <Amount>9567.00</Amount>
        <ServiceFee Main="0.00" VAT="0.00"/>
        <Discount>0.00</Discount>
        <ClientToPay>0.00</ClientToPay>
        <AirlinePayTotal>9566,00</AirlinePayTotal>
        <NetEarnedExclTaxes>1,00</NetEarnedExclTaxes>
        <AgentCountry>UA </AgentCountry>
        <Remarks>
          <Remark/>
          <Remark1>#SWFT#PI#P1/UA/EP935495/09SEP88/ADT/F/# </Remark1>
          <Remark2/>
          <Remark3/>
        </Remarks>
        <Taxes Curr="UAH" Value="5672.00">
          <Tax Curr="UAH" Value="644.00" TC="FR" NC=""/>
          <Tax Curr="UAH" Value="747.00" TC="JD" NC=""/>
          <Tax Curr="UAH" Value="46.00" TC="OG" NC=""/>
          <Tax Curr="UAH" Value="219.00" TC="QV" NC=""/>
          <Tax Curr="UAH" Value="733.00" TC="QX" NC=""/>
          <Tax Curr="UAH" Value="95.00" TC="UA" NC=""/>
          <Tax Curr="UAH" Value="48.00" TC="UD" NC=""/>
          <Tax Curr="UAH" Value="404.00" TC="YK" NC=""/>
          <Tax Curr="UAH" Value="2736.00" TC="YR" NC=""/>
        </Taxes>
        <CarrierTKTFees/>
      </TicketHeader>
      <NE No="1" LastName="DONCHENKO" FirstName="INNAMRS" Title="" text="ADT"/>
      <AirSegments>
        <AirSegment No="01" Class="R">
          <ServicingCarrier>AF</ServicingCarrier>
          <ServicingCarrierName>AIR FRANCE</ServicingCarrierName>
          <OpratingCarrierName/>
          <FlightNo>1753</FlightNo>
          <SeatNumber/>
          <FlightDurationTime>0315</FlightDurationTime>
          <GeographicalMileage>01245</GeographicalMileage>
          <Meal>MS</Meal>
          <MealSSR/>
          <AirClass>R</AirClass>
          <Departure Date="2015-03-29" Time="15:15:00"/>
          <Arrival Date="2015-03-29" Time="17:30:00"/>
          <Board City="KIEV/BORYSPIL" Point="KBP" Terminal=""/>
          <Off City="PARIS/CHARLES" Point="CDG" Terminal=""/>
          <FareBasis>RSR3UA</FareBasis>
          <BaggageAllowance>1PC</BaggageAllowance>
          <Equipment>319</Equipment>
          <WCHR/>
          <ACRecLoc/>
        </AirSegment>
        <AirSegment No="02" Class="R">
          <ServicingCarrier>AF</ServicingCarrier>
          <ServicingCarrierName>AIR FRANCE</ServicingCarrierName>
          <OpratingCarrierName/>
          <FlightNo>1300</FlightNo>
          <SeatNumber/>
          <FlightDurationTime>0205</FlightDurationTime>
          <GeographicalMileage>00660</GeographicalMileage>
          <Meal/>
          <MealSSR/>
          <AirClass>R</AirClass>
          <Departure Date="2015-03-30" Time="09:45:00"/>
          <Arrival Date="2015-03-30" Time="11:50:00"/>
          <Board City="PARIS/CHARLES" Point="CDG" Terminal="2F"/>
          <Off City="MADRID/MADRID" Point="MAD" Terminal=""/>
          <FareBasis>RSR3UA</FareBasis>
          <BaggageAllowance>1PC</BaggageAllowance>
          <Equipment>321</Equipment>
          <WCHR/>
          <ACRecLoc/>
        </AirSegment>
        <AirSegment No="03" Class="R">
          <ServicingCarrier>AF</ServicingCarrier>
          <ServicingCarrierName>AIR FRANCE</ServicingCarrierName>
          <OpratingCarrierName>AIR EUROPA</OpratingCarrierName>
          <FlightNo>4806</FlightNo>
          <SeatNumber/>
          <FlightDurationTime>0120</FlightDurationTime>
          <GeographicalMileage>00340</GeographicalMileage>
          <Meal>G</Meal>
          <MealSSR/>
          <AirClass>R</AirClass>
          <Departure Date="2015-03-30" Time="13:30:00"/>
          <Arrival Date="2015-03-30" Time="14:50:00"/>
          <Board City="MADRID/MADRID" Point="MAD" Terminal="2"/>
          <Off City="PALMA DE MALL" Point="PMI" Terminal=""/>
          <FareBasis>RSR3UA</FareBasis>
          <BaggageAllowance>1PC</BaggageAllowance>
          <Equipment>738</Equipment>
          <WCHR/>
          <ACRecLoc/>
        </AirSegment>
        <AirSegment No="04" Class="R">
          <ServicingCarrier>AF</ServicingCarrier>
          <ServicingCarrierName>AIR FRANCE</ServicingCarrierName>
          <OpratingCarrierName>AIR EUROPA</OpratingCarrierName>
          <FlightNo>4805</FlightNo>
          <SeatNumber/>
          <FlightDurationTime>0130</FlightDurationTime>
          <GeographicalMileage>00340</GeographicalMileage>
          <Meal>G</Meal>
          <MealSSR/>
          <AirClass>R</AirClass>
          <Departure Date="2015-04-22" Time="09:55:00"/>
          <Arrival Date="2015-04-22" Time="11:25:00"/>
          <Board City="PALMA DE MALL" Point="PMI" Terminal=""/>
          <Off City="MADRID/MADRID" Point="MAD" Terminal=""/>
          <FareBasis>RSR4UA</FareBasis>
          <BaggageAllowance>1PC</BaggageAllowance>
          <Equipment>738</Equipment>
          <WCHR/>
          <ACRecLoc/>
        </AirSegment>
        <AirSegment No="05" Class="R">
          <ServicingCarrier>AF</ServicingCarrier>
          <ServicingCarrierName>AIR FRANCE</ServicingCarrierName>
          <OpratingCarrierName/>
          <FlightNo>1301</FlightNo>
          <SeatNumber/>
          <FlightDurationTime>0205</FlightDurationTime>
          <GeographicalMileage>00660</GeographicalMileage>
          <Meal>S</Meal>
          <MealSSR/>
          <AirClass>R</AirClass>
          <Departure Date="2015-04-22" Time="12:45:00"/>
          <Arrival Date="2015-04-22" Time="14:50:00"/>
          <Board City="MADRID/MADRID" Point="MAD" Terminal="2"/>
          <Off City="PARIS/CHARLES" Point="CDG" Terminal=""/>
          <FareBasis>RSR4UA</FareBasis>
          <BaggageAllowance>1PC</BaggageAllowance>
          <Equipment>321</Equipment>
          <WCHR/>
          <ACRecLoc/>
        </AirSegment>
        <AirSegment No="06" Class="R">
          <ServicingCarrier>AF</ServicingCarrier>
          <ServicingCarrierName>AIR FRANCE</ServicingCarrierName>
          <OpratingCarrierName/>
          <FlightNo>1652</FlightNo>
          <SeatNumber/>
          <FlightDurationTime>0305</FlightDurationTime>
          <GeographicalMileage>01245</GeographicalMileage>
          <Meal>MS</Meal>
          <MealSSR/>
          <AirClass>R</AirClass>
          <Departure Date="2015-04-22" Time="19:45:00"/>
          <Arrival Date="2015-04-22" Time="23:50:00"/>
          <Board City="PARIS/CHARLES" Point="CDG" Terminal="2E"/>
          <Off City="KIEV/BORYSPIL" Point="KBP" Terminal=""/>
          <FareBasis>RSR4UA</FareBasis>
          <BaggageAllowance>1PC</BaggageAllowance>
          <Equipment>319</Equipment>
          <WCHR/>
          <ACRecLoc/>
        </AirSegment>
      </AirSegments>
    <XP></XP></Ticket>
XML;
?>